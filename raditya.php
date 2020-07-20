<?php
    class raditya{
        public $rssfeed;
        public function __construct()
	    {
            $this->rssfeed = simplexml_load_file(FeedUrl);
	    }
        public function __destruct()
        {
            
        }
        public function ReadFeed(){
            libxml_use_internal_errors(true);
            $this->rssfeed = simplexml_load_file(FeedUrl);
            $hsl = "";
            if($this->rssfeed){
                
                if(!empty($this->rssfeed)) {
                    $i=0;
                    foreach ($this->rssfeed->channel->item as $feed_item) {
                        if($i>12) break;
                            $hsl .='
                        <div class="col-md-6 cardrss">
                            <div class="card">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                    <div class="cardTitle"><a href="'.$feed_item->link.'" target="_smpn2ungasan">
                                        '.$feed_item->title.'
                                        </a>
                                        <div class="tglpost">'.$feed_item->pubDate.'</div>
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
            }else{
                $hsl .='
                        <div class="col-md-12 cardrss">
                            <div class="card">
                                <div class="container text-center">
                                    <i class="fab fa-github-square"></i>
                                    <div class="cardTitle">
                                        Error Read Web site SMP N2 Kuta Selatan
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
            }
            return $hsl;
        }
    }