<?php
  $kml = array('<?xml version="1.0" encoding="UTF-8"?>');

$kml[] = '<kml xmlns="http://earth.google.com/kml/2.2">';
  $kml[] = ' <Document>';

    $kml[]='<Style id="nodeAStyle">
    ';
$kml[]='<LineStyle>';
    $kml[]='</LineStyle>';
    $kml[]='<IconStyle id="nodeIcon">';
    $kml[]='<scale>0.945455</scale>';
    $kml[]='<Icon>';
    $kml[]='<href>https://github.com/liki123/kml/raw/main/images/p1.png</href>';
    $kml[]='</Icon>';
    $kml[]='<hotSpot x="20" y="2" xunits="pixels" yunits="pixels"/>';
    $kml[]='</IconStyle>';
    $kml[]='
    </Style>';

    $kml[]='<Style id="nodeBStyle">
    ';
$kml[]='<LineStyle>';
    $kml[]='</LineStyle>';
    $kml[]='<IconStyle id="nodeIcon">';
    $kml[]='<scale>0.945455</scale>';
    $kml[]='<Icon>';
    $kml[]='<href>https://github.com/liki123/kml/raw/main/images/p2.png</href>';
    $kml[]='</Icon>';
    $kml[]='<hotSpot x="20" y="2" xunits="pixels" yunits="pixels"/>';
    $kml[]='</IconStyle>';
    $kml[]='
    </Style>';

    $kml[]='<Style id="nodeCStyle">
    ';
$kml[]='<LineStyle>';
    $kml[]='</LineStyle>';
    $kml[]='<IconStyle id="nodeIcon">';
    $kml[]='<scale>0.945455</scale>';
    $kml[]='<Icon>';
    $kml[]='<href>https://github.com/liki123/kml/raw/main/images/p3.png</href>';
    $kml[]='</Icon>';
    $kml[]='<hotSpot x="20" y="2" xunits="pixels" yunits="pixels"/>';
    $kml[]='</IconStyle>';
    $kml[]='
    </Style>';

    $arr=array(
    {"id":1,"kind":"1","description":"Hello 1","lng":"18.2671664","lng":"99.7729226"},

    );

    foreach($arr as $arr_){
    $description=$arr_->description;
    $kml[] = ' <Folder>';
      $kml[] = ' <name>'.$arr_->id.'</name>';
      $kml[] = ' <Placemark id="' .$arr_->id. '">';
        $kml[] = ' <name>' . $arr_->id . '</name>';

        if($arr_->kind=='1'){
        $kml[] = ' <styleUrl>#' . (nodeA) .'Style</styleUrl>';
        }elseif($arr_->kind=='2'){
        $kml[] = ' <styleUrl>#' . (nodeB) .'Style</styleUrl>';
        }elseif($arr_->kind=='3'){
        $kml[] = ' <styleUrl>#' . (nodeC) .'Style</styleUrl>';
        }

        $kml[] ="<description>
          <![CDATA[$description]]>
        </description>";
        $kml[] = ' <Point>';
          $kml[] = ' <coordinates>' . $arr_->lng. ',' . $arr_->lat . '</coordinates>';
          $kml[] = ' </Point>';
        $kml[] = ' </Placemark>';
      $kml[] = ' </Folder>';
    }


    $kml[] = ' </Document>';
  $kml[] = '</kml>';
$kmlOutput = join("\n", $kml);

header('Content-Type: application/vnd.google-earth.kml+xml kml');
header("Content-Disposition: attachment; filename=file.kml");

echo $kmlOutput;
?>