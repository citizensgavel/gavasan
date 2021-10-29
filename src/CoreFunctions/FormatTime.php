<?php

namespace App\CoreFunctions;

final class FormatTime
{
       public function ChangeTime($FetchedDate){
              
              // Calculate difference between current time and given timestamp in seconds
              $TimeDiff = time() - strtotime($FetchedDate);

              // Time difference in seconds
              $AgoSeconds = $TimeDiff;
              
              // Convert time difference to minutes
              $AgoMinutes = round($TimeDiff / 60);
              
              // Convert time difference to hours
              $AgoHours = round($TimeDiff / 3600);
              
              // Convert time difference to days
              $AgoDays = round($TimeDiff / 86400);
              
              // Convert time difference to weeks
              $AgoWeeks = round($TimeDiff / 604800);
              
              // Convert time difference to months
              $AgoMonths = round($TimeDiff / 2600640);
              
              // Convert time difference to years
              $AgoYears = round($TimeDiff / 31207680);
              
              // Check for seconds
              if ($AgoSeconds <= 60) {
                     $TimeAgo = "$AgoSeconds seconds ago";
              } elseif ($AgoMinutes <= 60) { // Check for minutes 
                     if ($AgoMinutes==1) {
                            $TimeAgo = "one minute ago";
                     } else {
                            $TimeAgo = "$AgoMinutes minutes ago";
                     }
              } elseif ($AgoHours <= 24) { // Check for hours
                     if ($AgoHours == 1) {
                            $TimeAgo = "an hour ago";
                     } else {
                            $TimeAgo = "$AgoHours hours ago";
                     }
              } elseif ($AgoDays <= 6) { // Check for days
                     if ($AgoDays == 1) {
                            $TimeAgo = "Yesterday";
                     } else {
                            $TimeAgo = "$AgoDays days ago";
                     }
              } elseif ($AgoWeeks <= 4.3) {// Check for weeks
                     if ($AgoWeeks == 1) {
                            $TimeAgo = "a week ago";
                     } else {
                            $TimeAgo = "$AgoWeeks weeks ago";
                     }
              } elseif ($AgoMonths <= 12) {// Check for months
                     if ($AgoMonths == 1) {
                            $TimeAgo = "a month ago";
                     } else {
                            $TimeAgo = "$AgoMonths months ago";
                     }
              } else {
                     if ($AgoYears == 1) {
                            $TimeAgo = "one year ago";
                     } else {
                            $TimeAgo = "$AgoYears years ago";
                     }
              }
              return $TimeAgo;
       }
}
