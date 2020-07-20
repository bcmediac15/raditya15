<?php
    class feedblog extends raditya{
        public $rssfeedother;
        public function __construct()
	    {
        
	    }
        public function __destruct()
        {
            
        }
        public function ReadFeedOther(){
            $hsl = "";
            //for($i=0;$i<BLOGOTHER;$i++){
            //    $this->rssfeedother = simplexml_load_file(FeedUrl1[$i]);
            $this->rssfeedother = simplexml_load_file("https://artha.web.id/feed/");
            if($this->rssfeedother){
                
                foreach($this->rssfeedother as $rssfeedx){
                    //print_r($rssfeed);
                    if(!empty($rssfeedx)) {
                        $i=0;
                        foreach ($rssfeedx->item as $feed_item) {
                            if($i>12) break;
                                $hsl .='
                            <div class="col-md-6 cardrss">
                                <div class="card">
                                    <div class="container text-center">
                                        <i class="fab fa-github-square"></i>
                                        <div class="cardTitle"><a href="'.$feed_item->link.'" target="_smpn2ungasan">
                                            '.$feed_item->title.'
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    <p class="card-text">'.implode(' ', array_slice(explode(' ', $feed_item->description), 0, 24)).'...</p>
                                    </div>
                                    <div class="cardfoot">
                                        <a href="'.$feed_item->link.'" target="_smpn2ungasan">lebih lengkap..</a>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    }
                //} 
                }
            }
            return $hsl;
        }
    }