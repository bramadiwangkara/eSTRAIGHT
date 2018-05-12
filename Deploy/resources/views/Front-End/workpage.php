<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style_Workpage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Workpage |</title>
</head>

<body>
  <div class="nav">
    <ul>
      <li class="nav-button curr_nav"data-id="profile_menu">Home</li>
      <li class="nav-button" data-id="workpage_menu_box">Workpage</li>
      <a href="admin_panel3.php"><li class="nav-button admin_only" data-id="">Admin Panel</li></a>
    </ul>
  </div>
  <div id="workpage_menu_box">
    <div class="sa">
      <h2>
        Select Area <i class="fa fa-toggle-down" ></i>
      </h2>
      <div class="saSelect">
        <div class="saItems" data-id="Bangkalan">Bangkalan</div>
        <div class="saItems" data-id="Banyuwangi">Banyuwangi</div>
        <div class="saItems" data-id="Blitar">Blitar</div>
        <div class="saItems" data-id="Bojonegoro">Bojonegoro</div>
        <div class="saItems" data-id="Bondowoso">Bondowoso</div>
        <div class="saItems" data-id="Gresik">Gresik</div>
        <div class="saItems" data-id="Jember">Jember</div>
        <div class="saItems" data-id="Jombang">Jombang</div>
        <div class="saItems" data-id="Kediri">Kediri</div>
        <div class="saItems" data-id="Lamongan">Lamongan</div>
        <div class="saItems" data-id="Lumajang">Lumajang</div>
        <div class="saItems" data-id="Madiun">Madiun</div>
        <div class="saItems" data-id="Magetan">Magetan</div>
        <div class="saItems" data-id="Malang">Malang</div>
        <div class="saItems" data-id="Mojokerto">Mojokerto</div>
        <div class="saItems" data-id="Nganjuk">Nganjuk</div>
        <div class="saItems" data-id="Ngawi">Ngawi</div>
        <div class="saItems" data-id="Pacitan">Pacitan</div>
        <div class="saItems" data-id="Pamekasan">Pamekasan</div>
        <div class="saItems" data-id="Pasuruan">Pasuruan</div>
        <div class="saItems" data-id="Ponorogo">Ponorogo</div>
        <div class="saItems" data-id="Probolinggo">Probolinggo</div>
        <div class="saItems" data-id="Sampang">Sampang</div>
        <div class="saItems" data-id="Sidoarjo">Sidoarjo</div>
        <div class="saItems" data-id="Situbondo">Situbondo</div>
        <div class="saItems" data-id="Sumenep">Sumenep</div>
        <div class="saItems" data-id="Surabaya">Surabaya</div>
        <div class="saItems" data-id="Trenggalek">Trenggalek</div>
        <div class="saItems" data-id="Tuban">Tuban</div>
        <div class="saItems" data-id="Tulungagung">Tulungagung</div>
      </div>
    </div>
    <div class="map">
      <div class="mapdisp">
        <svg id="jatim_map" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3012.53 1638.06">
      		<polygon id="Tuban" class="cls reg" points="556.16 127.45 572.09 123.11 583.68 56.48 618.44 52.14 624.23 13.04 650.3 0 667.68 7.24 715.48 14.48 753.13 37.66 793.69 31.86 842.93 5.79 882.03 17.38 883.48 39.1 897.97 53.59 908.1 81.11 948.66 115.87 999.35 121.66 1032.66 115.87 1055.83 136.14 1063.08 179.59 1065.97 259.25 1044.25 262.15 1016.73 288.22 953 254.91 912.45 259.25 873.34 330.22 779.2 304.15 737.2 266.49 654.65 266.49 643.06 252.01 638.71 220.15 586.57 183.94 540.23 163.66 556.16 127.45"/>
      		<polygon id="Bojonegoro" class="cls reg" points="572.09 217.25 583.68 249.11 573.54 269.39 573.54 295.46 521.4 373.67 447.54 402.64 420.02 447.54 446.09 460.57 440.29 483.74 454.78 492.43 476.5 485.19 521.4 493.88 560.5 486.64 632.92 537.33 685.06 573.54 711.13 582.23 737.2 569.2 750.24 551.82 840.03 551.82 876.24 525.75 948.66 519.95 964.59 508.37 950.11 469.26 966.04 425.81 960.24 389.6 990.66 366.43 992.11 346.15 1023.97 308.5 1016.73 288.22 953 254.91 912.45 259.25 873.34 330.22 779.2 304.15 737.2 266.49 654.65 266.49 643.06 252.01 638.71 220.15 586.57 183.94 572.09 217.25"/>
      		<polygon id="Lamongan" class="cls reg" points="1077.56 89.8 1110.87 99.94 1183.29 92.69 1202.12 98.49 1231.08 88.35 1254.26 102.83 1232.53 126 1233.98 159.32 1189.08 162.21 1190.53 179.59 1258.6 204.22 1281.77 198.42 1304.95 210.01 1296.26 224.49 1333.91 241.87 1316.53 278.08 1289.02 296.91 1270.19 302.7 1273.08 327.32 1306.4 333.12 1294.81 353.39 1236.88 376.57 1213.7 409.88 1220.94 456.23 1180.39 463.47 1171.7 476.5 1141.29 482.3 1121.01 501.12 1087.7 485.19 1025.42 490.99 964.59 508.37 950.11 469.26 966.04 425.81 960.24 389.6 990.66 366.43 992.11 346.15 1023.97 308.5 1016.73 288.22 1044.25 262.15 1065.97 259.25 1063.08 179.59 1055.83 136.14 1032.66 115.87 1077.56 89.8"/>
      		<polygon id="Gresik" class="cls reg" points="1286.12 123.11 1332.47 127.45 1341.15 104.28 1320.88 95.59 1339.71 72.42 1364.33 124.56 1375.91 118.76 1375.91 162.21 1412.12 196.97 1415.02 246.22 1403.43 256.36 1394.74 304.15 1415.02 314.29 1429.5 343.25 1419.37 357.74 1393.3 364.98 1371.57 357.74 1367.22 379.46 1397.64 409.88 1396.19 450.43 1420.81 451.88 1430.95 486.64 1361.43 499.68 1351.29 517.05 1290.46 527.19 1271.64 511.26 1284.67 473.61 1274.53 443.19 1220.94 456.23 1213.7 409.88 1236.88 376.57 1294.81 353.39 1306.4 333.12 1273.08 327.32 1270.19 302.7 1289.02 296.91 1316.53 278.08 1333.91 241.87 1296.26 224.49 1304.95 210.01 1281.77 198.42 1258.6 204.22 1190.53 179.59 1189.08 162.21 1233.98 159.32 1232.53 126 1254.26 102.83 1286.12 123.11"/>
      		<polygon id="Sidoarjo" class="cls reg" points="1564.2 580.78 1549.71 586.57 1569.99 615.54 1600.41 624.23 1593.16 644.51 1525.09 654.65 1506.27 664.78 1478.75 664.78 1454.13 647.4 1415.02 634.37 1381.71 616.99 1361.43 589.47 1287.57 572.09 1262.95 551.82 1290.46 527.19 1351.29 517.05 1361.43 499.68 1430.95 486.64 1442.54 492.43 1461.37 477.95 1503.37 476.5 1558.4 492.43 1564.2 580.78"/>
      		<g class="group" id="Mojokerto">
      			<polygon class="reg" points="1423.71 660.44 1413.57 693.75 1391.85 700.99 1391.85 745.89 1352.74 793.69 1317.98 800.93 1294.81 821.2 1275.98 825.55 1248.46 827 1252.81 806.72 1222.39 750.24 1222.39 715.48 1205.01 727.06 1190.53 656.09 1191.98 616.99 1193.43 589.47 1213.7 570.64 1155.77 572.09 1171.7 524.3 1161.56 505.47 1171.7 476.5 1180.39 463.47 1220.94 456.23 1274.53 443.19 1284.67 473.61 1271.64 511.26 1290.46 527.19 1262.95 551.82 1287.57 572.09 1361.43 589.47 1381.71 616.99 1415.02 634.37 1423.71 660.44"/>
      			<polygon class="city" points="1242.67 550.37 1270.19 573.54 1248.46 606.85 1228.19 569.2 1242.67 550.37"/>
      		</g>
      		<polygon id="Jombang" class="cls reg" points="941.42 543.13 955.9 582.23 971.83 570.64 1013.83 573.54 1028.32 598.16 1010.94 605.4 1013.83 627.13 980.52 658.99 979.07 689.41 1023.97 698.1 1096.39 795.13 1110.87 782.1 1149.98 793.69 1220.94 828.45 1248.46 827 1252.81 806.72 1222.39 750.24 1222.39 715.48 1205.01 727.06 1190.53 656.09 1193.43 589.47 1213.7 570.64 1155.77 572.09 1171.7 524.3 1161.56 505.47 1171.7 476.5 1141.29 482.3 1121.01 501.12 1087.7 485.19 1025.42 490.99 964.59 508.37 948.66 519.95 941.42 543.13"/>
      		<polygon id="Nganjuk" class="cls reg" points="753.13 598.16 770.51 614.09 761.82 638.71 737.2 635.82 724.17 664.78 716.92 731.41 698.1 750.24 693.75 771.96 680.72 785 670.58 828.45 689.41 850.17 716.92 879.14 734.3 880.59 855.96 754.58 883.48 760.37 893.62 803.82 909.55 822.65 913.9 793.69 938.52 787.89 951.55 773.41 957.35 738.65 971.83 716.92 979.07 689.41 980.52 658.99 1013.83 627.13 1010.94 605.4 1028.32 598.16 1013.83 573.54 971.83 570.64 955.9 582.23 941.42 543.13 948.66 519.95 876.24 525.75 840.03 551.82 750.24 551.82 737.2 569.2 753.13 598.16"/>
      		<g class="group" id="Madiun">
      			<polygon class="reg" points="596.71 574.99 579.33 576.44 566.3 603.95 543.13 621.33 534.43 640.16 502.57 628.58 501.12 645.96 480.85 657.54 469.26 672.03 469.26 687.96 448.98 702.44 476.5 715.48 477.95 735.75 501.12 727.06 498.23 740.1 490.99 764.72 463.47 785 453.33 832.79 504.02 850.17 553.26 850.17 572.09 835.69 628.58 824.1 640.16 855.96 669.13 861.76 689.41 850.17 670.58 828.45 680.72 785 693.75 771.96 698.1 750.24 716.92 731.41 724.17 664.78 737.2 635.82 761.82 638.71 770.51 614.09 753.13 598.16 737.2 569.2 711.13 582.23 685.06 573.54 632.92 537.33 596.71 574.99"/>
      			<polygon class="city" points="499.68 714.03 490.99 706.79 492.43 690.85 538.78 682.16 532.99 709.68 521.4 738.65 498.23 740.1 501.12 727.06 499.68 714.03"/>
      		</g>
      		<polygon id="Ngawi" class="cls reg" points="450.43 506.92 421.46 476.5 389.6 476.5 353.39 459.12 308.5 433.05 276.63 427.26 262.15 399.74 241.87 393.95 205.66 408.43 195.53 441.74 196.97 502.57 179.59 527.19 185.39 588.02 207.11 605.4 199.87 650.3 214.35 669.13 227.39 643.06 247.66 644.51 252.01 692.3 282.43 682.16 314.29 686.51 333.12 670.58 378.01 657.54 395.39 634.37 463.47 612.64 502.57 628.58 534.43 640.16 543.13 621.33 566.3 603.95 579.33 576.44 596.71 574.99 632.92 537.33 560.5 486.64 521.4 493.88 476.5 485.19 454.78 492.43 450.43 506.92"/>
      		<polygon id="Magetan" class="cls reg" points="362.08 832.79 356.29 845.83 312.84 842.93 315.74 806.72 267.94 806.72 228.84 771.96 237.53 695.2 214.35 669.13 227.39 643.06 247.66 644.51 252.01 692.3 282.43 682.16 314.29 686.51 333.12 670.58 378.01 657.54 395.39 634.37 463.47 612.64 502.57 628.58 501.12 645.96 480.85 657.54 469.26 672.03 469.26 687.96 448.98 702.44 476.5 715.48 477.95 735.75 501.12 727.06 498.23 740.1 490.99 764.72 463.47 785 453.33 832.79 362.08 832.79"/>
      		<path id="Ponorogo" class="cls reg" d="M312.84,842.93l20.28,49.24L307,950.11l31.86,10.14,30.41,36.21,7.24,42-14.48,43.45,2.9,23.17,24.62,34.76,34.76,14.48,40.55,1.45v-44.9l42-11.59,13-42s31.86-24.62,36.21-26.07,42-14.48,42-14.48l8.69,15.93,13-46.35-8.69-18.83,31.86-11.59,7.24-27.52L683.61,911l11.59,13,17.38-14.48,4.34-30.41-27.52-29-20.28,11.59-29-5.79L628.58,824.1l-56.48,11.59-18.83,14.48H504l-50.69-17.38H362.08l-5.79,13Z" />
      		<polygon id="Pacitan" class="cls reg" points="285.32 966.04 225.94 945.76 198.42 957.35 182.49 989.21 192.63 1032.66 178.15 1061.63 159.32 1064.52 146.28 1042.8 118.76 1076.11 76.76 1073.21 47.8 1060.18 37.66 1084.8 8.69 1113.77 0 1148.53 8.69 1187.63 110.07 1220.94 146.28 1215.15 139.04 1187.63 157.87 1187.63 163.66 1215.15 185.39 1223.84 195.53 1241.22 236.08 1236.88 299.81 1213.7 412.77 1238.32 420.02 1223.84 398.29 1207.91 406.98 1167.36 427.26 1167.36 424.36 1154.32 389.6 1139.84 364.98 1105.08 362.08 1081.9 376.57 1038.45 369.32 996.45 338.91 960.24 307.05 950.11 285.32 966.04"/>
      		<polygon id="Trenggalek" class="cls reg" points="453.33 1236.88 441.74 1261.5 456.23 1268.74 512.71 1278.88 528.64 1257.15 547.47 1262.95 541.68 1278.88 577.88 1286.12 588.02 1273.08 643.06 1319.43 674.92 1310.74 644.51 1289.02 640.16 1273.08 660.44 1273.08 654.65 1249.91 669.13 1242.67 685.06 1267.29 677.82 1286.12 712.58 1278.88 711.13 1247.01 695.2 1242.67 672.03 1213.7 677.82 1180.39 663.34 1165.91 660.44 1142.73 680.72 1122.46 742.99 1122.46 764.72 1105.08 760.37 1087.7 740.1 1084.8 708.23 1041.35 693.75 1038.45 683.61 1023.97 699.54 1010.94 690.85 983.42 679.27 984.87 686.51 964.59 700.99 950.11 695.2 924.04 683.61 911 650.3 928.38 643.06 955.9 611.2 967.49 619.89 986.31 606.85 1032.66 598.16 1016.73 556.16 1031.21 519.95 1057.28 506.92 1099.28 464.92 1110.87 464.92 1155.77 424.36 1154.32 427.26 1167.36 406.98 1167.36 398.29 1207.91 420.02 1223.84 453.33 1236.88"/>
      		<polygon id="Tulungagung" class="cls reg" points="706.79 1223.84 729.96 1216.6 763.27 1242.67 761.82 1222.39 811.07 1258.6 848.72 1260.05 840.03 1239.77 869 1236.88 886.38 1257.15 915.35 1267.29 908.1 1184.74 911 1155.77 950.11 1163.01 980.52 1138.39 983.42 1109.42 958.8 1099.28 944.31 1102.18 913.9 1093.49 893.62 1092.04 879.14 1077.56 879.14 1054.39 858.86 1022.52 851.62 974.73 822.65 979.07 798.03 970.38 789.34 951.55 757.48 909.55 728.51 897.97 734.3 880.59 716.92 879.14 712.58 909.55 695.2 924.04 700.99 950.11 686.51 964.59 679.27 984.87 690.85 983.42 699.54 1010.94 683.61 1023.97 693.75 1038.45 708.23 1041.35 740.1 1084.8 760.37 1087.7 764.72 1105.08 742.99 1122.46 680.72 1122.46 660.44 1142.73 663.34 1165.91 677.82 1180.39 672.03 1213.7 695.2 1242.67 711.13 1247.01 706.79 1223.84"/>
      		<g class="group" id="Blitar">
      			<polygon class="reg" points="990.66 1265.84 1041.35 1271.64 1074.66 1290.46 1109.42 1291.91 1134.04 1283.22 1174.6 1287.57 1202.12 1245.57 1200.67 1186.18 1178.94 1154.32 1241.22 1135.49 1260.05 1110.87 1254.26 1057.28 1274.53 1028.32 1274.53 974.73 1251.36 948.66 1219.5 967.49 1190.53 971.83 1142.73 957.35 1096.39 971.83 1074.66 981.97 977.62 995 951.55 1008.04 874.79 1008.04 873.34 1021.07 858.86 1022.52 879.14 1054.39 879.14 1077.56 893.62 1092.04 913.9 1093.49 944.31 1102.18 958.8 1099.28 983.42 1109.42 980.52 1138.39 950.11 1163.01 911 1155.77 908.1 1184.74 915.35 1267.29 990.66 1265.84"/>
      			<polygon class="city" points="1016.73 1073.21 1016.73 1051.49 1037.01 1051.49 1052.94 1061.63 1047.14 1090.59 1016.73 1121.01 996.45 1106.53 999.35 1084.8 995 1070.32 1016.73 1073.21"/>
      		</g>
      		<g class="group" id="Malang">
      			<polygon class="reg" points="1147.08 829.89 1177.49 819.76 1202.12 838.58 1220.94 828.45 1248.46 827 1275.98 825.55 1294.81 821.2 1317.98 800.93 1352.74 793.69 1361.43 812.51 1387.5 842.93 1446.88 861.76 1484.54 867.55 1520.75 912.45 1530.89 941.42 1569.99 963.14 1642.41 977.62 1655.44 1000.8 1646.75 1029.76 1629.37 1061.63 1646.75 1109.42 1630.82 1171.7 1645.31 1207.91 1636.62 1231.08 1646.75 1255.7 1659.79 1257.15 1661.24 1281.77 1674.27 1287.57 1635.17 1336.81 1591.72 1341.15 1571.44 1313.64 1556.96 1333.91 1526.54 1338.26 1514.95 1322.33 1512.06 1344.05 1448.33 1357.09 1430.95 1371.57 1412.12 1371.57 1403.43 1358.54 1344.05 1336.81 1255.7 1333.91 1191.98 1313.64 1174.6 1287.57 1202.12 1245.57 1200.67 1186.18 1178.94 1154.32 1241.22 1135.49 1260.05 1110.87 1254.26 1057.28 1274.53 1028.32 1274.53 974.73 1251.36 948.66 1219.5 967.49 1190.53 971.83 1142.73 957.35 1155.77 908.1 1138.39 874.79 1134.04 844.38 1122.46 824.1 1147.08 829.89"/>
      			<polygon class="city" points="1336.81 942.86 1352.74 896.52 1358.54 853.07 1387.5 842.93 1361.43 812.51 1352.74 793.69 1317.98 800.93 1294.81 821.2 1275.98 825.55 1277.43 854.52 1293.36 880.59 1274.53 916.79 1270.19 955.9 1336.81 942.86"/>
      			<polygon class="city" points="1377.36 964.59 1381.71 942.86 1406.33 948.66 1425.16 964.59 1423.71 989.21 1442.54 999.35 1429.5 1013.83 1426.61 1028.32 1403.43 1037.01 1391.85 1025.42 1391.85 1013.83 1377.36 1012.38 1380.26 989.21 1354.19 963.14 1377.36 964.59"/>
      		</g>
      		<g class="group" id="Kediri">
      			<polygon class="reg" points="728.51 897.97 757.48 909.55 789.34 951.55 798.03 970.38 822.65 979.07 851.62 974.73 858.86 1022.52 873.34 1021.07 874.79 1008.04 951.55 1008.04 977.62 995 1074.66 981.97 1096.39 971.83 1142.73 957.35 1155.77 908.1 1138.39 874.79 1134.04 844.38 1122.46 824.1 1147.08 829.89 1177.49 819.76 1202.12 838.58 1220.94 828.45 1149.98 793.69 1110.87 782.1 1096.39 795.13 1023.97 698.1 979.07 689.41 971.83 716.92 957.35 738.65 951.55 773.41 938.52 787.89 913.9 793.69 909.55 822.65 893.62 803.82 883.48 760.37 855.96 754.58 734.3 880.59 728.51 897.97"/>
      			<polygon class="city" points="873.34 857.41 873.34 838.58 893.62 824.1 916.79 853.07 916.79 867.55 947.21 879.14 954.45 892.17 941.42 897.97 945.76 916.79 908.1 905.21 889.28 896.52 897.97 882.03 876.24 877.69 855.96 866.1 873.34 857.41"/>
      		</g>
      		<g class="group" id="Pasuruan">
      			<polygon class="reg" points="1391.85 745.89 1391.85 700.99 1413.57 693.75 1423.71 660.44 1415.02 634.37 1454.13 647.4 1478.75 664.78 1506.27 664.78 1525.09 654.65 1572.89 647.4 1584.47 683.61 1600.41 679.27 1617.79 703.89 1653.99 716.92 1677.17 715.48 1703.24 735.75 1727.86 727.06 1764.07 754.58 1771.31 776.31 1748.14 799.48 1740.89 858.86 1668.48 934.17 1668.48 960.24 1642.41 977.62 1569.99 963.14 1530.89 941.42 1520.75 912.45 1484.54 867.55 1446.88 861.76 1387.5 842.93 1361.43 812.51 1352.74 793.69 1391.85 745.89"/>
      			<polygon class="city" points="1601.86 709.68 1598.96 738.65 1616.34 760.37 1638.06 757.48 1655.44 732.86 1653.99 716.92 1617.79 703.89 1601.86 709.68"/>
      		</g>
      		<g class="group" id="Probolinggo">
      			<polygon class="reg" points="1785.79 777.75 1797.38 792.24 1819.11 787.89 1829.24 806.72 1853.87 809.62 1877.04 796.58 1900.21 808.17 1926.28 835.69 1943.66 838.58 1952.35 824.1 1969.73 829.89 2008.84 803.82 2065.32 795.13 2092.84 766.17 2184.09 780.65 2169.6 795.13 2191.33 844.38 2184.09 855.96 2207.26 929.83 2204.36 960.24 2198.57 967.49 2207.26 976.18 2208.71 987.76 2191.33 1003.69 2188.43 986.31 2142.08 1009.49 2094.29 1008.04 2091.39 1025.42 2058.08 1025.42 2058.08 1009.49 2024.77 1005.14 1995.8 1032.66 1974.08 963.14 1920.49 948.66 1910.35 932.73 1865.45 932.73 1872.69 945.76 1826.35 993.56 1804.62 993.56 1800.28 1006.59 1775.65 999.35 1756.83 1012.38 1730.76 1000.8 1709.03 981.97 1694.55 981.97 1678.62 996.45 1655.44 1000.8 1642.41 977.62 1668.48 960.24 1668.48 934.17 1740.89 858.86 1748.14 799.48 1771.31 776.31 1785.79 777.75"/>
      			<polygon class="city" points="1853.87 809.62 1845.17 827 1856.76 864.65 1878.49 842.93 1872.69 861.76 1888.63 871.9 1900.21 850.17 1900.21 808.17 1877.04 796.58 1853.87 809.62"/>
      		</g>
      		<polygon id="Lumajang" class="cls reg" points="1646.75 1029.76 1655.44 1000.8 1678.62 996.45 1694.55 981.97 1709.03 981.97 1730.76 1000.8 1756.83 1012.38 1775.65 999.35 1800.28 1006.59 1804.62 993.56 1826.35 993.56 1872.69 945.76 1865.45 932.73 1910.35 932.73 1920.49 948.66 1974.08 963.14 1995.8 1032.66 1987.11 1052.94 2008.84 1073.21 2007.39 1100.73 2014.63 1138.39 1997.25 1167.36 1982.77 1173.15 1965.39 1199.22 1971.18 1226.74 1950.9 1258.6 1908.9 1239.77 1820.55 1239.77 1801.72 1252.81 1764.07 1241.22 1751.03 1251.36 1709.03 1260.05 1674.27 1287.57 1661.24 1281.77 1659.79 1257.15 1646.75 1255.7 1636.62 1231.08 1645.31 1207.91 1630.82 1171.7 1646.75 1109.42 1629.37 1061.63 1646.75 1029.76"/>
      		<polygon id="Jember" class="cls reg" points="2249.26 983.42 2252.16 1008.04 2291.26 1018.18 2310.09 1047.14 2333.26 1032.66 2353.54 1047.14 2404.23 1037.01 2430.3 1013.83 2511.41 1057.28 2540.37 1096.39 2556.31 1096.39 2554.86 1112.32 2533.13 1122.46 2495.48 1164.46 2478.1 1168.8 2488.23 1186.18 2486.79 1202.12 2454.92 1236.88 2456.37 1262.95 2498.37 1283.22 2485.34 1331.02 2466.51 1333.91 2459.27 1358.54 2443.34 1361.43 2433.2 1345.5 2411.47 1342.6 2385.4 1375.91 2386.85 1401.98 2408.58 1428.06 2385.4 1458.47 2373.82 1430.95 2359.33 1459.92 2356.44 1419.37 2344.85 1404.88 2315.88 1428.06 2284.02 1428.06 2275.33 1404.88 2262.3 1413.57 2223.19 1404.88 2218.84 1377.36 2189.88 1362.88 2169.6 1355.64 2152.22 1359.98 2116.01 1358.54 2089.94 1344.05 2088.49 1322.33 2068.22 1310.74 2029.11 1332.47 2013.18 1325.22 1992.9 1287.57 1950.9 1258.6 1971.18 1226.74 1965.39 1199.22 1982.77 1173.15 1997.25 1167.36 2014.63 1138.39 2007.39 1100.73 2008.84 1073.21 1987.11 1052.94 1995.8 1032.66 2024.77 1005.14 2058.08 1009.49 2058.08 1025.42 2091.39 1025.42 2094.29 1008.04 2142.08 1009.49 2188.43 986.31 2191.33 1003.69 2208.71 987.76 2249.26 983.42"/>
      		<polygon id="Bondowoso" class="cls reg" points="2234.78 963.14 2242.02 945.76 2286.92 911 2298.5 837.14 2341.95 848.72 2360.78 858.86 2383.95 857.41 2398.44 831.34 2423.06 847.27 2459.27 837.14 2450.58 818.31 2504.17 827 2536.03 813.96 2586.72 819.76 2583.82 837.14 2624.38 999.35 2659.14 983.42 2708.38 993.56 2711.28 1054.39 2689.55 1081.9 2643.21 1099.28 2611.34 1090.59 2554.86 1112.32 2556.31 1096.39 2540.37 1096.39 2511.41 1057.28 2430.3 1013.83 2404.23 1037.01 2353.54 1047.14 2333.26 1032.66 2310.09 1047.14 2291.26 1018.18 2252.16 1008.04 2249.26 983.42 2208.71 987.76 2207.26 976.18 2234.78 963.14"/>
      		<polygon id="Situbondo" class="cls reg" points="2240.57 798.03 2275.33 774.86 2311.54 800.93 2341.95 799.48 2370.92 758.93 2410.03 753.13 2456.37 767.62 2465.06 748.79 2475.2 750.24 2540.37 682.16 2575.13 725.61 2591.07 771.96 2628.72 785 2679.41 782.1 2704.04 766.17 2750.38 811.07 2809.76 811.07 2866.25 842.93 2887.97 869 2886.53 918.24 2847.42 950.11 2786.59 934.17 2773.56 905.21 2727.21 961.69 2708.38 993.56 2659.14 983.42 2624.38 999.35 2583.82 837.14 2586.72 819.76 2536.03 813.96 2504.17 827 2450.58 818.31 2459.27 837.14 2423.06 847.27 2398.44 831.34 2383.95 857.41 2360.78 858.86 2341.95 848.72 2298.5 837.14 2286.92 911 2242.02 945.76 2234.78 963.14 2207.26 976.18 2198.57 967.49 2204.36 960.24 2207.26 929.83 2184.09 855.96 2191.33 844.38 2169.6 795.13 2184.09 780.65 2240.57 798.03"/>
      		<polygon id="Banyuwangi" class="cls reg" points="2857.56 1068.87 2830.04 1112.32 2815.56 1181.84 2824.25 1199.22 2802.52 1238.32 2801.07 1281.77 2788.04 1335.36 2790.94 1378.81 2802.52 1407.78 2792.38 1436.74 2801.07 1443.99 2821.35 1422.26 2822.8 1367.22 2843.08 1429.5 2838.73 1458.47 2854.66 1504.82 2874.94 1525.09 2895.22 1506.27 2934.32 1538.13 2970.53 1543.92 2995.15 1587.37 2990.81 1617.79 2960.39 1638.06 2914.04 1638.06 2876.39 1617.79 2805.42 1620.68 2785.14 1603.3 2814.11 1583.03 2809.76 1551.16 2777.9 1516.4 2722.86 1496.13 2692.45 1500.47 2689.55 1530.89 2618.58 1514.95 2562.1 1514.95 2551.96 1533.78 2533.13 1517.85 2530.24 1494.68 2512.86 1491.78 2499.82 1507.71 2473.75 1512.06 2470.86 1494.68 2486.79 1488.88 2480.99 1465.71 2447.68 1465.71 2437.54 1483.09 2411.47 1464.26 2385.4 1458.47 2408.58 1428.06 2386.85 1401.98 2385.4 1375.91 2411.47 1342.6 2433.2 1345.5 2443.34 1361.43 2459.27 1358.54 2466.51 1333.91 2485.34 1331.02 2498.37 1283.22 2456.37 1262.95 2454.92 1236.88 2486.79 1202.12 2488.23 1186.18 2478.1 1168.8 2495.48 1164.46 2533.13 1122.46 2554.86 1112.32 2611.34 1090.59 2643.21 1099.28 2689.55 1081.9 2711.28 1054.39 2708.38 993.56 2727.21 961.69 2773.56 905.21 2786.59 934.17 2847.42 950.11 2857.56 1068.87"/>
      		<polygon id="Bangkalan" class="cls reg" points="1439.64 270.84 1464.26 280.98 1448.33 328.77 1483.09 341.81 1536.68 327.32 1598.96 330.22 1635.17 353.39 1738 372.22 1753.93 351.94 1743.79 343.25 1768.41 318.63 1778.55 321.53 1795.93 289.67 1794.48 265.05 1806.07 256.36 1793.04 224.49 1806.07 230.28 1820.55 198.42 1817.66 182.49 1787.24 186.84 1782.9 149.18 1797.38 139.04 1810.41 111.52 1765.52 102.83 1680.07 101.38 1581.58 110.07 1569.99 127.45 1562.75 152.07 1487.44 210.01 1480.19 231.73 1442.54 221.59 1439.64 270.84"/>
      		<polygon id="Sampang" class="cls reg" points="2062.43 107.18 2091.39 115.87 2085.6 137.59 2060.98 157.87 2046.49 194.08 2052.29 205.66 2020.42 234.63 2017.53 265.05 1998.7 283.87 2001.6 320.08 2013.18 327.32 2008.84 375.12 1971.18 367.88 1837.93 388.15 1814.76 378.01 1782.9 385.26 1738 372.22 1753.93 351.94 1743.79 343.25 1768.41 318.63 1778.55 321.53 1795.93 289.67 1794.48 265.05 1806.07 256.36 1793.04 224.49 1806.07 230.28 1820.55 198.42 1817.66 182.49 1787.24 186.84 1782.9 149.18 1797.38 139.04 1810.41 111.52 2062.43 107.18"/>
      		<polygon id="Pamekasan" class="cls reg" points="2101.53 382.36 2118.91 408.43 2155.12 382.36 2158.01 347.6 2191.33 305.6 2191.33 286.77 2208.71 273.74 2181.19 243.32 2194.22 228.84 2166.7 220.15 2181.19 202.77 2198.57 205.66 2194.22 169.46 2211.6 165.11 2223.19 105.73 2091.39 115.87 2085.6 137.59 2060.98 157.87 2046.49 194.08 2052.29 205.66 2020.42 234.63 2017.53 265.05 1998.7 283.87 2001.6 320.08 2013.18 327.32 2008.84 375.12 2101.53 382.36"/>
      		<g class="group" id="Surabaya">
        		<polygon class="city" points="1433.85 379.46 1464.26 376.57 1483.09 357.74 1513.51 357.74 1575.79 453.33 1562.75 469.26 1558.4 492.43 1503.37 476.5 1461.37 477.95 1442.54 492.43 1430.95 486.64 1420.81 451.88 1396.19 450.43 1397.64 409.88 1367.22 379.46 1371.57 357.74 1393.3 364.98 1419.37 357.74 1433.85 379.46"/>
          </g>
      		<g class="group" id="Sumenep">
      			<polygon class="reg" points="2239.12 296.91 2255.05 285.32 2368.02 307.05 2427.41 309.94 2424.51 283.87 2405.68 278.08 2418.72 246.22 2444.78 233.18 2469.41 243.32 2476.65 233.18 2507.06 201.32 2546.17 202.77 2589.62 182.49 2612.79 183.94 2599.76 150.63 2541.82 126 2494.03 97.04 2428.85 88.35 2368.02 101.38 2284.02 110.07 2249.26 102.83 2223.19 105.73 2211.6 165.11 2194.22 169.46 2198.57 205.66 2181.19 202.77 2166.7 220.15 2194.22 228.84 2181.19 243.32 2208.71 273.74 2191.33 286.77 2191.33 305.6 2239.12 296.91"/>
      			<polygon class="reg" points="2344.85 375.12 2352.09 370.77 2357.89 379.46 2346.3 396.84 2311.54 378.01 2312.99 364.98 2344.85 375.12"/>
      			<polygon class="reg" points="2424.51 347.6 2453.47 340.36 2466.51 363.53 2466.51 372.22 2476.65 379.46 2472.3 389.6 2452.03 360.63 2441.89 367.88 2418.72 369.32 2415.82 356.29 2424.51 347.6"/>
      			<polygon class="reg" points="2475.2 243.32 2496.92 260.7 2546.17 254.91 2557.75 265.05 2559.2 286.77 2550.51 291.12 2496.92 283.87 2466.51 272.29 2459.27 252.01 2475.2 243.32"/>
      			<polygon class="reg" points="2640.31 183.94 2654.79 168.01 2664.93 173.8 2662.03 199.87 2647.55 205.66 2640.31 201.32 2640.31 183.94"/>
      			<polygon class="reg" points="2747.49 247.66 2728.66 279.53 2746.04 322.98 2796.73 344.7 2824.25 350.5 2845.97 331.67 2827.14 330.22 2830.04 307.05 2812.66 294.01 2808.32 266.49 2790.94 257.8 2780.8 240.42 2747.49 247.66"/>
      			<polygon class="reg" points="2925.63 299.81 2950.25 291.12 2969.08 305.6 3003.84 307.05 3012.53 328.77 3000.94 340.36 2967.63 324.43 2927.08 327.32 2901.01 331.67 2890.87 315.74 2925.63 299.81"/>
      		</g>
      	</svg>
      </div>
    </div>
    <div class="map2">
      <div class="map2disp">
        <svg id="Surabaya_XL" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1029.9 667.9">
          <path class="cls sub" id="Surabaya_A" d="M262,35H248L211,49l-16,2-17-7L160,54l-19,5-17,4L112,76l-11,9-6,2-4,16-4,3-2-5V90l-6-7-9-1-6,5,2,5,8,5,1,6-5,7H65L61,99l-5-6-4,1-2,8v6l-4,3L41,99l-8-7L22,97l-9,8,2,7,8,3,8,11-1,9-10-1L9,140,0,150v24l3,4h9l7-1,5,4,4,11-2,4L11,183l-7,1L2,208l20-2,15,1,5,31L30,316l44,31,5,6L768,103l-9-6-3-11-10-9-3-7-5-8-3-1-1-3-9-1-6,1v3l-5-1V57l-3-2V44l-4-6h-2l-4,15,1-18-5-6-12-5-6-1-9-7-1,2-5-4H652L634,25,624,0l-4,1,8,26L604,39l-1-6-5,1-3-14,13-6-3-9L590,8l3,28-5-21-4-4-18,4V25l5,3,10-6,8,22-4,3V43h-4v5l-4,1-3-8,1-4-2-5-7,3,4,16-4,2-2-7,3-2-6-24-10,6,1,4h3l-2,4,8,30L546,23,505,39l5,8,26-9,1,5-4,1c0,1,2,5,2,5l5-1,6,21-11,4v4l-3,1L518,55l-6,4,12,21-3,1L494,39v8l-8-7,7,10h-2l-3,4,16,29L478,45l-1,1,16,26-3,5-1,7-4,5-2,15-23,15,3,15-6,4v3l10-1,9,15,32,6v7l-37-6-11-19-11-2s-2,10-2,11l-3-19-9-1-28,13-4-1-3,2-23,1-8,9-1,11-2-12-11-4-18,1-4,10-2-8-10-7H309l-5-6-9,4,1-6-7-15L263,95l-12,4,9-6V80l-3-5,2-12,12-6,1-5-4-8-4-4Z" transform="translate(0.45 0.45)"/>
          <polygon class="cls sub" id="Surabaya_B" points="81.45 356.45 84.45 358.45 91.45 370.45 98.45 375.45 123.45 384.45 139.45 399.45 145.45 409.45 144.45 420.45 146.45 425.45 153.45 433.45 152.45 447.45 145.45 459.45 144.45 477.45 146.45 488.45 156.45 507.45 164.45 518.45 172.45 524.45 180.45 536.45 212.45 526.45 224.45 524.45 232.45 526.45 236.45 548.45 245.45 550.45 247.45 568.45 883.45 296.45 871.45 279.45 872.45 276.45 870.45 275.45 867.45 266.45 856.45 269.45 861.45 264.45 854.45 252.45 852.45 242.45 847.45 235.45 848.45 230.45 844.45 227.45 843.45 221.45 833.45 213.45 832.45 193.45 830.45 194.45 830.45 197.45 826.45 197.45 824.45 190.45 819.45 189.45 815.45 184.45 812.45 182.45 796.45 152.45 796.45 149.45 793.45 147.45 793.45 144.45 791.45 142.45 787.45 135.45 782.45 132.45 773.45 130.45 770.45 105.45 81.45 356.45"/>
          <path class="cls sub" id="Surabaya_C" d="M248,571v3l-1,22,5,15,7,3,15-1,7-2h9l12,11,4,16,3,27,32,2,21-4,21-13,35-16,25-15,19-19,6-2,43,5,1,11,25,1,4,3v10l1,4h7l15-1h13l3-4,19-2,6-6-1-7,4-5,14,1,17,4h12l5-7,3-10,4-4s21,4,22,5c1,0,14,4,14,4l16,1,20,5,12-3,1,7,9,1-1,6,10,8,17-1,11-4,10,2,11,6h10l10-5,16,1,22,5,9-1s9-1,11,0,12-2,12-2l16-10,17-6,7-3,2-7-5-6,7-9-1-16-7-7,4-3,3-11,3,6,2,2,22-18,17-12,1-4-23-17,25,4,9-3,6-7,1-6,4-9-1-5,5-9v-7l4-6-2-2-5-2-6,4-3,6-8,6H979l18-3,10-13,12-11,4-10,6-6-2-7-4-10-4-6-5-2-7-7-6-2-9-4h-3l-5-3h-7l-12,16-1,6-3-5-3-2-1-3-11-18-4-3v-4l-5-5-1-4-2-2-5,5,5-9-1-9-2-5,1-8-5-9-9-1-12-3-5,8,3-9-3-3-5-6-6-1,2-3-1-8-6-2Z" transform="translate(0.45 0.45)"/>
        </svg>
      </div>
    </div>
    <div id="infobox">
      ...
    </div>
    <div class="workspace">
      <div class="close"><i class="fa fa-close"></i></div>
      <div class="wrapper">
          <h2 class="Areaname">...</h2><br>

          <div class="lastUpdate">
            Update Terakhir: <span class="lastUpdateDate">---</span>
          </div>
          <div class="export">
            Export
            <div class="tahun">
              Tahun
            </div>
            <div class="bulan">
              Bulan
            </div>
          </div>
          <div class="sorek">
            <button type="button" name="sorek">SOREK Tahunan</button>
          </div>
          <div class="pemakaian">
            <button type="button" name="pemakaian">Pemakaian Tetap</button>
          </div>
          <div class="chartProp">
            <label for="ID">ID</label>
            <div id="ID">01941841739</div>
            <label for="tahunChart"></label>
            <div id="tahunChart">2000</div>
            <button type="button" name="buat">Buat Chart</button>
          </div>

        <div class="chart">
          CHART
        </div>
      </div>
    </div>
  </div>
  <div id="profile_menu">
    <button type="button" name="change_password" id="change_password">Change Password</button>
    <div class="change_pass_form">
      <input type="password" name="old_pass" value="" placeholder="Password Lama"> <span>*</span>
      <input type="password" name="re_old_pass" value="" placeholder="Ulang Password Lama"> <span>*</span>
      <input type="password" name="new_pass" value="" placeholder="Password Baru"> <span>*</span>
      <button type="submit" name="submit_new_pass">Submit</button>
    </div>
  </div>


  <script>
    $(function() {

      var show_area = false;
      var curr_page = "profile_menu";
      $("#"+curr_page).siblings().not('.nav').hide();

      $('.cls, .group').hover(function(e) {
        $(this).addClass("hovered");
        $('#infobox').css('display', 'block');
        $('#infobox').html($(this).attr('id'));
        $(this).parent().append($(this));
      })


      $('.cls, .group').mouseleave(function(e) {
        $('#infobox').css('display', 'none');
        $(this).removeClass("hovered");
      })
      $(document).mousemove(function(e) {
        $('#infobox').css('top',e.pageY-$('#infobox').height()-20);
        $('#infobox').css('left',e.pageX);
      }).mouseover();

      $('.cls, .group').on('click', function(e) {
        if ($(this).attr('id') != 'Surabaya'){
          $('.workspace').slideDown(500);
          $('.Areaname').html($(this).attr('id'));
          $('#infobox').css('display', 'none');
          $('.sa').hide();
          $('.map2').hide();
        }
        else {
          $('.map2').show();
          // window.setTimeout(function() {
          //   $('.map2disp').fadeIn(500);
          // }, 100);
        }
      })

      $('.close').on('click', function(e) {
        $('.workspace').slideUp(500);
        window.setTimeout(showh2, 500);
        show_area = false;
        $('.saSelect').slideUp();
        $('.sa h2 i').css({'transform' : 'rotate(0)'});
      })

      function showh2 () {
        $('.sa').show();
      }

      $('.saItems').hover(function() {
        $('#'+$(this).data('id')).addClass("hovered");
        $('#'+$(this).data('id')).parent().append($('#'+$(this).data('id')));
      })

      $('.saItems').mouseleave(function() {
        $('#'+$(this).data('id')).removeClass("hovered");
      })

      $('.map').on('click', function() {
        show_area = false;
        $('.saSelect').slideUp();
        $('.sa h2 i').css({'transform' : 'rotate(0)'});
      })

      $('.sa h2').on('click', function() {
        $('.saSelect').slideToggle(100);
        show_area = !show_area;
        show_area ? $('.sa h2 i').css({'transform' : 'rotate(-180deg)'}) : $('.sa h2 i').css({'transform' : 'rotate(0)'});
      })

      $('.map2').on('click', function() {
        $('.map2').fadeOut(100);
      })

      $('.saItems').on('click', function() {
        show_area = false;
        $('.saSelect').slideUp();
        $('.sa h2 i').css({'transform' : 'rotate(0)'});
        if ($(this).data('id') != 'Surabaya'){

          $('.workspace').slideDown(500);
          $('.Areaname').html($(this).data('id'));
          $('.sa').hide();
        }
        else {
          $('.map2').show();
          // $('.map2disp').fadeIn(500)
        }
      })

      $('.nav-button:not(admin_only)').click(function() {
        $("#"+$(this).data('id')).show();
        $(this).siblings().removeClass('curr_nav');
        $(this).addClass('curr_nav');
        $("#"+$(this).data('id')).siblings().not('.nav').hide();
        // console.log($(this).attr('class'));
      })

      $('.admin_only').on('click', function () {

      })



      $('#change_password').click(function() {
        $('.change_pass_form').toggle();
      })



    });
  </script>

</body>

</html>
