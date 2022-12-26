<?php
// getTimeSlot(IntervalInMinutes, $startTime, $endTime)
function getTimeSlot($sometimeOut, $start, $end)
{
    $start = new DateTime($start);
    $end = new DateTime($end);
    $BeginTimeStemp = $start->format('H:i'); // Get time Format in Hour and minutes
    $lastTimeStemp = $end->format('H:i');
    $i=0;
    while(strtotime($BeginTimeStemp) <= strtotime($lastTimeStemp)){
        $start = $BeginTimeStemp;
        $end = date('H:i',strtotime('+'.$sometimeOut.' minutes',strtotime($BeginTimeStemp)));
        $BeginTimeStemp = date('H:i',strtotime('+'.$sometimeOut.' minutes',strtotime($BeginTimeStemp)));
        $i++;
        if(strtotime($BeginTimeStemp) <= strtotime($lastTimeStemp)){
            $time[$i]['start'] = $start;
            $time[$i]['end'] = $end;
        }
    }
    return $time;
}
$slot = getTimeSlot(60, '09:00', '22:00');

echo "<pre>";
print_r($slot);
?>