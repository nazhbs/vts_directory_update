<?php 
/*
VTS Directory Update Script
Author: Nazmus Nasir
URL: http://nazm.us 
Harvard Business School Information Technology - Learning Management Ecosystem

This script's purpose is to generate the HTML for an internal directory - has no real use outside of this one usecase. 

vts.php - this file contains the code which will generate the base HTML needed for the directory
*/

//    mysql Database connection info in config.php
    include("config.php");

    //array of sections to be outputted below
    $sections = ['A','B','C','D','E','F','G','H','I','J'];
?>

<table style="background-color: white">
    <tbody>
        <tr>
            <td>
<!--Header info - List Sec A - J anchor links-->
                <div><b><i><span style="font-size: 20pt"><font color="#0000ff" face="Calibri"> 
            <?php 
                    foreach($sections as $section) //loop to print each section name from above array
                    {
            ?>
                    <a href="#Section_<?=$section;?>">Section <?=$section;?></a> 
            <?php 
                        if($section !='J') echo ' -'; //only add a dash between Sec A-J, not after each letter
                    } 
            ?>
                    <div class="ms-rteThemeForeColor-2-0"><font face="Calibri">FIELD 3 Teams Directory</font></div>
<div>&#160;</div></font></span></i></b></div>
<!--end header                -->
                
<!--Start List-->
<?php
        foreach($sections as $section)     //loop to print each Section header and provide Section name for query below          
        {
?>
                <h1 style="margin: 12pt 0in 3pt"><a name="Section_<?=$section;?>"></a><font face="Cambria" size="5"><span class="ms-rteThemeForeColor-2-0">Section <?=$section;?></span></font></h1>
                <?php
                    //query each section for its VTS/IR sites
                    $query = "SELECT * FROM vts WHERE `section` = "; //table name is VTS
                    $query .= "'" . $section ."'";
                    $result = mysqli_query($conn,$query);
                    while($rows = mysqli_fetch_assoc($result)) //loop and print team name, number, ticker, vts/ir URLs
                    {
                        echo '<br /><div class="ms-rteFontSize-3"><font face="Calibri"><span class="ms-rteThemeForeColor-2-0">Team ' . $rows['team_number'] . ':&#160; ' .$rows['teamname'] . ' -&#160; ' .$rows['ticker'] . '</span></font></div>';  //print team number, team name, and ticker on this row
                        echo '<div class="ms-rteFontSize-3"><a href="http://vts.hbs.edu/' . $rows['vts_id'] . '"><font color="#0000ff" face="Calibri"><b>VTS</b>: http://vts.hbs.edu/' . $rows['vts_id'] . '</font></a></div>'; // print VTS ID (concatenated with URL) as anchor and link
                        echo '<div class="ms-rteFontSize-3"><a href="http://vts.hbs.edu/' . $rows['ir_id'] . '"><font color="#0000ff" face="Calibri"><b>IR</b>: http://vts.hbs.edu/' . $rows['ir_id'] . '</font></a></div>'; // print IR ID (concatenated with URL) as anchor and link
                    }
                ?>
<?php
        }
?>
<!--end list-->
            </td>
        </tr>
    </tbody>
</table>
