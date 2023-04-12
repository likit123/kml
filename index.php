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
    $kml[]='<href>https://github.com/likit123/kml/raw/main/images/p1.png</href>';
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
    $kml[]='<href>https://github.com/likit123/kml/raw/main/images/p2.png</href>';
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
    $kml[]='<href>https://github.com/likit123/kml/raw/main/images/p3.png</href>';
    $kml[]='</Icon>';
    $kml[]='<hotSpot x="20" y="2" xunits="pixels" yunits="pixels"/>';
    $kml[]='</IconStyle>';
    $kml[]='
    </Style>';

    $arr=array(
    ["id"=>100,"kind"=>"1","description"=>"Hello 100","lat"=>"17.529634","lng"=>"99.140962"],
    ["id"=>200,"kind"=>"2","description"=>"Hello 200","lat"=>"17.5321386","lng"=>"99.1479705"],
    ["id"=>300,"kind"=>"3","description"=>"Hello 300","lat"=>"17.534981","lng"=>"99.142191"],

    );

    foreach($arr as $arr_){

    $id=$arr_['id'];
    $kind=$arr_['kind'];
    $description=$arr_['description'];
    $lat=$arr_['lat'];
    $lng=$arr_['lng'];

    $kml[]=' <Folder>' ; $kml[]=' <name>' .$id.'</name>';

      $kml[] = ' <Placemark id="' .$id. '">';
        $kml[] = ' <name>' . $id . '</name>';

        if($kind=='1'){
        $kml[] = ' <styleUrl>#' . (nodeA) .'Style</styleUrl>';
        }elseif($kind=='2'){
        $kml[] = ' <styleUrl>#' . (nodeB) .'Style</styleUrl>';
        }elseif($kind=='3'){
        $kml[] = ' <styleUrl>#' . (nodeC) .'Style</styleUrl>';
        }

        $kml[] ="<description>
          <![CDATA[$description]]>
        </description>";
        $kml[] = ' <Point>';
          $kml[] = ' <coordinates>' . $lng. ',' . $lat . '</coordinates>';
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