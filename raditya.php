<?php
    class raditya{
        public $rssfeed;
        public $JamAktif;

        public function __construct()
	    {

	    }
        public function __destruct()
        {
            
        }
        private function arrAktif(){
            $this->hrAktif["HARI"]["Mon"]["tx"] = "";
            $this->hrAktif["HARI"]["Tue"]["tx"] = "";
            $this->hrAktif["HARI"]["Wed"]["tx"] = "";
            $this->hrAktif["HARI"]["Thu"]["tx"] = "";
            $this->hrAktif["HARI"]["Fri"]["tx"] = "";
            $this->hrAktif["HARI"]["Sat"]["tx"] = "";
            $this->hrAktif["HARI"]["Mon"]["SESI1"] = "";
            $this->hrAktif["HARI"]["Mon"]["SESI2"] = "";
            $this->hrAktif["HARI"]["Tue"]["SESI1"] = "";
            $this->hrAktif["HARI"]["Tue"]["SESI2"] = "";
            $this->hrAktif["HARI"]["Wed"]["SESI1"] = "";
            $this->hrAktif["HARI"]["Wed"]["SESI2"] = "";
            $this->hrAktif["HARI"]["Thu"]["SESI1"] = "";
            $this->hrAktif["HARI"]["Thu"]["SESI2"] = "";
            $this->hrAktif["HARI"]["Fri"]["SESI1"] = "";
            $this->hrAktif["HARI"]["Fri"]["SESI2"] = "";
            $this->hrAktif["HARI"]["Sat"]["SESI1"] = "";
            $this->hrAktif["HARI"]["Sat"]["SESI2"] = "";
        }
        public function JamPelAktif(){
            $this->arrAktif();
            $this->hariaktif();
            for($i=1;$i<=2;$i++){
                $JM = "SESI".$i;
                $mulai1 = date("Y-m-d");
                $mulai1 .= " ".JDTime[$JM]["START"];
                $akhir1 = date("Y-m-d");
                $akhir1 .= " ".JDTime[$JM]["STOP"];
                $start1 = strtotime($mulai1);
                $end1 = strtotime($akhir1);
                $day = date('D');
                if(time() >= $start1 && time() <= $end1){
                    $this->hrAktif["HARI"][$day][$JM] = " jamaktif";
                }
            }
            return $this->hrAktif;
        }
        public function hariaktif(){
            $day = date('D');
            $this->hrAktif["HARI"][$day]["tx"] = " harini";
            return $this->hrAktif;
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