<?php
include("header.php");
?>


<script type="text/javascript">

       

// this is for reloading table
        function update(){
            $('#reload_cpu').load("home.php #reload_cpu");
        }
        setInterval('update()',10000);
// end


</script>



    <div class="page-inner no-page-title">
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-darkblue">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Server Status</h4>
                                    </div>




                                    <div class="panel-body dashboard-panel">
                                        <div class="container-fluid">
                                            <div class="server-load row">

<div id="reload_cpu"><?php
    function get_server_memory_usage(){

// Get memory size
$memory_size = memory_get_usage();
// Specify memory unit
$memory_unit = array('Bytes','KB','MB','GB','TB','PB');
// Display memory size into kb, mb etc.
echo round($memory_size/pow(1024,($x=floor(log($memory_size,1024)))),2).' '.$memory_unit[$x]."\n";

}
?>

                                                <div class="server-stat col-sm-4">
                                                    <p><?php get_server_memory_usage();?></p>
                                                    <span>Memory Usage</span>
                                                </div>
                                                <div class="server-stat col-sm-4">
                                                   <!--  <p>320GB</p>
                                                    <span>Space</span> -->
                                                </div>
                                                <div class="server-stat col-sm-4">
                                                    <p>


<?php




    function _getServerLoadLinuxData()
    {
        if (is_readable("/proc/stat"))
        {
            $stats = @file_get_contents("/proc/stat");

            if ($stats !== false)
            {
                // Remove double spaces to make it easier to extract values with explode()
                $stats = preg_replace("/[[:blank:]]+/", " ", $stats);

                // Separate lines
                $stats = str_replace(array("\r\n", "\n\r", "\r"), "\n", $stats);
                $stats = explode("\n", $stats);

                // Separate values and find line for main CPU load
                foreach ($stats as $statLine)
                {
                    $statLineData = explode(" ", trim($statLine));

                    // Found!
                    if
                    (
                        (count($statLineData) >= 5) &&
                        ($statLineData[0] == "cpu")
                    )
                    {
                        return array(
                            $statLineData[1],
                            $statLineData[2],
                            $statLineData[3],
                            $statLineData[4],
                        );
                    }
                }
            }
        }

        return null;
    }

    // Returns server load in percent (just number, without percent sign)
    function getServerLoad()
    {
        $load = null;

        if (stristr(PHP_OS, "win"))
        {
            $cmd = "wmic cpu get loadpercentage /all";
            @exec($cmd, $output);

            if ($output)
            {
                foreach ($output as $line)
                {
                    if ($line && preg_match("/^[0-9]+\$/", $line))
                    {
                        $load = $line;
                        break;
                    }
                }
            }
        }
        else
        {
            if (is_readable("/proc/stat"))
            {
                // Collect 2 samples - each with 1 second period
                // See: https://de.wikipedia.org/wiki/Load#Der_Load_Average_auf_Unix-Systemen
                $statData1 = _getServerLoadLinuxData();
                sleep(1);
                $statData2 = _getServerLoadLinuxData();

                if
                (
                    (!is_null($statData1)) &&
                    (!is_null($statData2))
                )
                {
                    // Get difference
                    $statData2[0] -= $statData1[0];
                    $statData2[1] -= $statData1[1];
                    $statData2[2] -= $statData1[2];
                    $statData2[3] -= $statData1[3];

                    // Sum up the 4 values for User, Nice, System and Idle and calculate
                    // the percentage of idle time (which is part of the 4 values!)
                    $cpuTime = $statData2[0] + $statData2[1] + $statData2[2] + $statData2[3];

                    // Invert percentage to get CPU time, not idle time
                    $load = 100 - ($statData2[3] * 100 / $cpuTime);
                }
            }
        }

        return $load;
    }

    //----------------------------

    $cpuLoad = getServerLoad();
    if (is_null($cpuLoad)) {
        echo "CPU load not estimateable (maybe too old Windows or missing rights at Linux or Windows)";
    }
    else {
        echo $cpuLoad . "%";
    }

?>





                                                    </p>
                                                    <span>CPU</span>
                                                </div>

</div>

                                            </div>
                                        </div>
                                        <div id="chart1"><svg></svg></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row -->
                        <div class="row">
                            
                        </div><!-- Row -->
                        <div class="row">
                            
                        </div><!-- Row -->
                    </div><!-- Main Wrapper -->

                </div><!-- /Page Inner -->








<?php
include("footer.php");
?>