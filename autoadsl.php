<?php
function updateStatus() {
                       # $order="/bin/sh ~/project/pengxin/adsl.sh ";
                        $order="/bin/sh ~/project/hanlong/boha/testadsl.sh ";
                        exec($order);
                        echo "auto adsl connection !\n";
        }
        while(1){
           updateStatus();
            sleep(120000);
        }
?>
