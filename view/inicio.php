
<?php
include '../bd/conexion.php';

session_start();
$uname=$_SESSION['username'];
 if (empty($uname)) { 
  header("Location:index.php");
 }

?>


<!DOCTYPE html><html lang="es" itemscope itemtype="http://schema.org/WebPage">
    <head>
         
        <script type="text/javascript" nonce="KuG4VGKGTGUsy6kfk21GUA">var DOCS_timing={}; DOCS_timing['sl']=new Date().getTime();
        </script>
        <script nonce="KuG4VGKGTGUsy6kfk21GUA">function _DumpException(e) {throw e;}
        </script>
        <script nonce="KuG4VGKGTGUsy6kfk21GUA">_docs_flag_initialData={"atari-eiitev":false,"docs-sup":"","docs-eea":false,"docs-ecci":false,"docs-idfmp":false,"docs-esi":false,"ilcm":{"eui":"AHKXmL2XERfABd4tn4Rmtt0XbWxc0DQr_JMVCDdZ1Bs_c76BYIWq9GHCvYn0u2rd7T0JvoU9FGMW","je":1,"sstu":1592832425805000,"si":"CNqOtZfDleoCFZuSTwkdR1kF-w","gsc":null,"ei":[14101418,14100834,14100810,5708766,14101026,14100043,5710567,5703839,5707413,5707711,14101090,5709137,5703022,5711080,5711530,14100878,14101414,14101382,5704621,14101350,5711994,14101017,14100894,14101218,14101226,5710359,5710768,14101410,5709888,14101346,5710806,14101310,14100978,14101246,14101390,14101254,14101362,14101010,14101054,5711206,5708061,14100031,14101338,14101374,5711929,14100946,14101446,14100064,5706832,5706601,5706836,14100049,5700016,14100170,5705837,14101370,14101078,14100854],"crc":0,"cvi":[]},"docs-ccdil":false,"docs-eil":true,"docs-eoi":false,"info_params":{"token":"AHL0AtJHLq3r75o_1H-lCB_jTprYuV6O0Q:1592832425513"},"docs-enpf":false,"atari-efur":true,"atari-jefp":"/_/view/jserror","docs-jern":"view","atari-rhpp":"/_/view"}; _docs_flag_cek= null ;
        </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="referrer" content="strict-origin-when-cross-origin">
        <link rel="icon" href="https://ssl.gstatic.com/atari/images/favicon_2.ico"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Portal Pacientes - Videos"/>
       <meta itemprop="url" property="og:url" content="https://sites.google.com/view/portalpacientes/videos"/> 
        <meta itemprop="thumbnailUrl" content="https://ssl.gstatic.com/atari/images/atari-logo.png"/>
        <meta itemprop="image" content="https://ssl.gstatic.com/atari/images/atari-logo.png"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700%7COpen%20Sans%3A400%2C400italic%2C700%2C700italic&display=swap" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Google+Sans:400,500|Roboto:300,400,500,700|Source+Code+Pro:400,700&display=swap" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://www.gstatic.com/_/atari/_/ss/k=atari.vw.lut5xL34oTY.L.W.O/d=1/ct=zgms/rs=AGEqA5lcSD4cltpWTj8P_jCgnvMcfCJHpA"/> 
        
<title itemprop="name">Portal Pacientes - Videos</title>
        
        <style jsname="ptDGoc" nonce="KuG4VGKGTGUsy6kfk21GUA">.gk8rDe .zfr3Q{color: rgba(0,0,0,1);}.M63kCb{background-color: rgba(255,255,255,1);}.OUGEr{color: rgba(33,33,33,1);}.duRjpb .OUGEr{color: rgba(83,115,145,1);}.JYVBee .OUGEr{color: rgba(83,115,145,1);}.OmQG5e .OUGEr{color: rgba(83,115,145,1);}.iwQgFb{background-color: rgba(0,0,0,0.150000006);}.ySLm4c{font-family: "Open Sans", sans-serif;}.CbiMKe{background-color: rgba(87,108,126,1);}.qeLZfd .zfr3Q{color: rgba(33,33,33,1);}.qeLZfd .qnVSj{color: rgba(33,33,33,1);}.qeLZfd .duRjpb{color: rgba(71,101,129,1);}.qeLZfd .qLrapd{color: rgba(71,101,129,1);}.qeLZfd .JYVBee{color: rgba(71,101,129,1);}.qeLZfd .aHM7ed{color: rgba(71,101,129,1);}.qeLZfd .OmQG5e{color: rgba(71,101,129,1);}.qeLZfd .NHD4Gf{color: rgba(71,101,129,1);}.qeLZfd .aw5Odc{color: rgba(71,101,129,1);}.qeLZfd .dhtgD:hover{color: rgba(44,93,133,1);}.qeLZfd .dhtgD:visited{color: rgba(71,101,129,1);}.qeLZfd .iwQgFb{background-color: rgba(0,0,0,0.150000006);}.qeLZfd .OUGEr{color: rgba(33,33,33,1);}.qeLZfd .duRjpb .OUGEr{color: rgba(71,101,129,1);}.qeLZfd .JYVBee .OUGEr{color: rgba(71,101,129,1);}.qeLZfd .OmQG5e .OUGEr{color: rgba(71,101,129,1);}.qeLZfd:before{background-color: rgba(230,231,231,1); display: block;}.lQAHbd .zfr3Q{color: rgba(255,255,255,1);}.lQAHbd .qnVSj{color: rgba(255,255,255,1);}.lQAHbd .duRjpb{color: rgba(232,244,255,1);}.lQAHbd .qLrapd{color: rgba(232,244,255,1);}.lQAHbd .JYVBee{color: rgba(232,244,255,1);}.lQAHbd .aHM7ed{color: rgba(232,244,255,1);}.lQAHbd .OmQG5e{color: rgba(232,244,255,1);}.lQAHbd .NHD4Gf{color: rgba(232,244,255,1);}.lQAHbd .aw5Odc{color: rgba(232,244,255,1);}.lQAHbd .dhtgD:visited{color: rgba(232,244,255,1);}.lQAHbd .iwQgFb{background-color: rgba(255,255,255,0.150000006);}.lQAHbd .OUGEr{color: rgba(255,255,255,1);}.lQAHbd .duRjpb .OUGEr{color: rgba(232,244,255,1);}.lQAHbd .JYVBee .OUGEr{color: rgba(232,244,255,1);}.lQAHbd .OmQG5e .OUGEr{color: rgba(232,244,255,1);}.lQAHbd .CbiMKe{background-color: rgba(255,255,255,1);}.lQAHbd:before{background-color: rgba(87,108,126,1); display: block;}.cJgDec .zfr3Q{color: rgba(255,255,255,1);}.cJgDec .zfr3Q .OUGEr{color: rgba(255,255,255,1);}.cJgDec .qnVSj{color: rgba(255,255,255,1);}.cJgDec .qLrapd{color: rgba(255,255,255,1);}.cJgDec .aHM7ed{color: rgba(255,255,255,1);}.cJgDec .NHD4Gf{color: rgba(255,255,255,1);}.cJgDec .IFuOkc:before{background-color: rgba(33,33,33,1); opacity: 0; display: block;}.O13XJf{height: 310px; padding-bottom: 50px; padding-top: 50px;}.O13XJf .IFuOkc{background-image: url(https://ssl.gstatic.com/atari/images/aristotle-header-dark.jpg);}.O13XJf .IFuOkc:before{background-color: rgba(33,33,33,1); opacity: 0.5; display: block;}.O13XJf .zfr3Q{color: rgba(255,255,255,1);}.O13XJf .qnVSj{color: rgba(255,255,255,1);}.O13XJf .duRjpb{color: rgba(255,255,255,1);}.O13XJf .qLrapd{color: rgba(255,255,255,1);}.O13XJf .JYVBee{color: rgba(255,255,255,1);}.O13XJf .aHM7ed{color: rgba(255,255,255,1);}.O13XJf .OmQG5e{color: rgba(255,255,255,1);}.O13XJf .NHD4Gf{color: rgba(255,255,255,1);}.tpmmCb .zfr3Q{color: rgba(33,33,33,1);}.tpmmCb .zfr3Q .OUGEr{color: rgba(33,33,33,1);}.tpmmCb .qnVSj{color: rgba(33,33,33,1);}.tpmmCb .qLrapd{color: rgba(33,33,33,1);}.tpmmCb .aHM7ed{color: rgba(33,33,33,1);}.tpmmCb .NHD4Gf{color: rgba(33,33,33,1);}.tpmmCb .IFuOkc:before{background-color: rgba(255,255,255,1); display: block;}.tpmmCb .Wew9ke{fill: rgba(33,33,33,1);}.dhtgD:hover{color: rgba(48,114,175,1);}.dhtgD:active{color: rgba(48,114,175,1);}.Zjiec{color: rgba(83,115,145,1); font-family: Roboto, sans-serif; font-size: 20pt; font-weight: 500; letter-spacing: 1px; padding-bottom: 57px; padding-left: 21.5px; padding-right: 21.5px; padding-top: 8px; text-align: center; text-transform: none;}.XMyrgf{margin-top: 0px; margin-left: 21.5px; margin-bottom: 24px; margin-right: 21.5px; text-align: center;}.TlfmSc{color: rgba(116,164,203,1); font-family: Roboto, sans-serif; font-size: 15pt; font-weight: 500; letter-spacing: 1.5px; text-transform: none;}.Mz8gvb{color: rgba(116,164,203,1);}.zDUgLc{background-color: rgba(255,255,255,1); border-bottom-style: solid; border-bottom-width: 1px; border-color: rgba(204,204,204,1);}.QTKDff.chg4Jd:focus{background-color: rgba(255,255,255,0.1199999973);}.YTv4We{color: rgba(83,115,145,1);}.YTv4We:hover:before{background-color: rgba(183,153,81,0.1199999973); display: block;}.YTv4We.chg4Jd:focus:before{border-color: rgba(183,153,81,0.3600000143); display: block;}.eWDljc{background-color: rgba(255,255,255,1);}.eWDljc .hDrhEe{padding-left: 8px;}.ZXW7w{color: rgba(106,106,106,1); opacity: 0.26;}.PsKE7e{color: rgba(106,106,106,1); font-family: "Open Sans", sans-serif; font-size: 12pt; font-weight: 400;}.lhZOrc{color: rgba(33,33,33,1);}.hDrhEe:hover{color: rgba(33,33,33,1);}.M9vuGd{color: rgba(33,33,33,1); font-weight: 700;}.jgXgSe:hover{color: rgba(33,33,33,1);}.j10yRb:hover{color: rgba(33,33,33,1);}.j10yRb.chg4Jd:focus:before{border-color: rgba(33,33,33,0.3600000143); display: block;}.iWs3gf{color: rgba(106,106,106,1);}.wgxiMe{background-color: rgba(255,255,255,1); border-color: rgba(0,0,0,0.150000006); border-style: solid; border-width: 1px;}.fOU46b .TlfmSc{color: rgba(255,255,255,1);}.fOU46b .KJll8d{background-color: rgba(255,255,255,1);}.fOU46b .Mz8gvb{color: rgba(255,255,255,1);}.fOU46b .Mz8gvb.chg4Jd:focus:before{border-color: rgba(255,255,255,1); display: block;}.fOU46b .qV4dIc{color: rgba(255,255,255,0.8700000048);}.fOU46b .jgXgSe:hover{color: rgba(255,255,255,1);}.fOU46b .M9vuGd{color: rgba(255,255,255,1);}.fOU46b .iWs3gf{color: rgba(255,255,255,0.8700000048);}.fOU46b .G8QRnc .Mz8gvb{color: rgba(0,0,0,0.8000000119);}.fOU46b .G8QRnc .Mz8gvb.chg4Jd:focus:before{border-color: rgba(0,0,0,0.8000000119); display: block;}.fOU46b .G8QRnc .ZXW7w{color: rgba(0,0,0,0.8000000119);}.fOU46b .G8QRnc .TlfmSc{color: rgba(0,0,0,0.8000000119);}.fOU46b .G8QRnc .KJll8d{background-color: rgba(0,0,0,0.8000000119);}.fOU46b .G8QRnc .qV4dIc{color: rgba(0,0,0,0.6399999857);}.fOU46b .G8QRnc .jgXgSe:hover{color: rgba(0,0,0,0.8199999928);}.fOU46b .G8QRnc .M9vuGd{color: rgba(0,0,0,0.8199999928);}.fOU46b .G8QRnc .iWs3gf{color: rgba(0,0,0,0.6399999857);}.fOU46b .aCIEDd .qV4dIc{color: rgba(33,33,33,1);}.fOU46b .aCIEDd .TlfmSc{color: rgba(33,33,33,1);}.fOU46b .aCIEDd .KJll8d{background-color: rgba(33,33,33,1);}.fOU46b .aCIEDd .ZXW7w{color: rgba(33,33,33,1);}.fOU46b .aCIEDd .jgXgSe:hover{color: rgba(33,33,33,1); opacity: 0.82;}.fOU46b .aCIEDd .Mz8gvb{color: rgba(33,33,33,1);}.fOU46b .aCIEDd .iWs3gf{color: rgba(33,33,33,1);}.fOU46b .a3ETed .qV4dIc{color: rgba(255,255,255,1);}.fOU46b .a3ETed .TlfmSc{color: rgba(255,255,255,1);}.fOU46b .a3ETed .KJll8d{background-color: rgba(255,255,255,1);}.fOU46b .a3ETed .ZXW7w{color: rgba(255,255,255,1);}.fOU46b .a3ETed .jgXgSe:hover{color: rgba(255,255,255,1); opacity: 0.82;}.fOU46b .a3ETed .Mz8gvb{color: rgba(255,255,255,1);}.fOU46b .a3ETed .iWs3gf{color: rgba(255,255,255,1);}@media only screen and (min-width: 1280px){.XeSM4.b2Iqye.fOU46b .LBrwzc .iWs3gf{color: rgba(255,255,255,0.8700000048);}}@media only screen and (min-width: 1280px){.KuNac.b2Iqye.fOU46b .iWs3gf{color: rgba(0,0,0,0.6399999857);}}.fOU46b .zDUgLc{opacity: 0;}.LBrwzc .ZXW7w{color: rgba(0,0,0,1);}.LBrwzc .KJll8d{background-color: rgba(0,0,0,1);}.GBy4H .ZXW7w{color: rgba(255,255,255,1);}.GBy4H .KJll8d{background-color: rgba(255,255,255,1);}.eBSUbc{background-color: rgba(255,255,255,1); color: rgba(33,33,33,0.6999999881);}.BFDQOb:hover{color: rgba(33,33,33,1);}.ImnMyf{background-color: rgba(255,255,255,1); color: rgba(33,33,33,1);}.Vs12Bd{background-color: rgba(230,231,231,1); color: rgba(33,33,33,1);}.S5d9Rd{background-color: rgba(87,108,126,1); color: rgba(255,255,255,1);}.zfr3Q{color: rgba(33,33,33,1); font-family: "Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56; margin-top: 16px;}.qnVSj{color: rgba(33,33,33,1);}.duRjpb{color: rgba(83,115,145,1); font-family: Roboto, sans-serif; font-size: 26pt; font-weight: 700; letter-spacing: 0px; line-height: 1.5; margin-top: 28px; text-transform: none;}.qLrapd{color: rgba(83,115,145,1);}.JYVBee{color: rgba(83,115,145,1); font-family: Roboto, sans-serif; font-size: 18pt; font-style: normal; font-weight: 700; line-height: 1.56; margin-top: 20px;}.aHM7ed{color: rgba(83,115,145,1);}.OmQG5e{color: rgba(83,115,145,1); font-family: Roboto, sans-serif; font-size: 13pt; font-weight: 700; letter-spacing: 1px; line-height: 1.63; margin-top: 18px;}.NHD4Gf{color: rgba(83,115,145,1);}.LB7kq .duRjpb{font-size: 45pt; font-style: normal; font-weight: 500; letter-spacing: -0.5px; line-height: 1.26; margin-top: 45px;}.LB7kq .baZpAe .duRjpb{padding-bottom: 18px;}.LB7kq .duRjpb:not(.TYR86d):first-child:before{border-bottom-style: solid; border-bottom-width: 8px; border-color: rgba(116,164,203,1); margin-left: auto; margin-right: auto; width: 100px; display: block;}.LB7kq .JYVBee{font-size: 21pt;}@media only screen and (max-width: 479px){.LB7kq .duRjpb{font-size: 30pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.LB7kq .duRjpb{font-size: 38pt;}}@media only screen and (max-width: 479px){.LB7kq .JYVBee{font-size: 17pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.LB7kq .JYVBee{font-size: 19pt;}}.O13XJf{height: 310px; padding-bottom: 50px; padding-top: 50px;}@media only screen and (min-width: 480px) and (max-width: 767px){.O13XJf{height: 280px; padding-bottom: 45px; padding-top: 45px;}}@media only screen and (max-width: 479px){.O13XJf{height: 250px; padding-bottom: 40px; padding-top: 40px;}}.SBrW1{height: 480px;}@media only screen and (min-width: 480px) and (max-width: 767px){.SBrW1{height: 480px;}}@media only screen and (max-width: 479px){.SBrW1{height: 400px;}}.WVklg{height: 100vh;}.Wew9ke{fill: rgba(255,255,255,1);}.gk8rDe{height: 200px; padding-bottom: 40px; padding-top: 60px;}.gk8rDe .duRjpb{color: rgba(83,115,145,1); font-size: 36pt;}.gk8rDe .qLrapd{color: rgba(83,115,145,1);}.gk8rDe .duRjpb:not(.TYR86d):first-child:before{border-bottom-width: 6px; border-color: rgba(83,115,145,1); display: block;}.gk8rDe .JYVBee{margin-top: 13px;}@media only screen and (max-width: 479px){.gk8rDe .duRjpb{font-size: 25pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.gk8rDe .duRjpb{font-size: 31pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.gk8rDe{padding-top: 45px;}}@media only screen and (max-width: 479px){.gk8rDe{padding-bottom: 0px; padding-top: 30px;}}.dhtgD{text-decoration: underline;}.JzO0Vc{background-color: rgba(255,255,255,1); border-color: rgba(0,0,0,0.150000006); border-right-style: solid; border-right-width: 1px; font-family: Lato, sans-serif; width: 250px;}@media only screen and (min-width: 1280px){.JzO0Vc{padding-top: 62px;}}.Zjiec{font-family: Roboto, sans-serif; font-size: 20pt; font-weight: 500; letter-spacing: 1px; padding-bottom: 57px; padding-left: 21.5px; padding-right: 21.5px; padding-top: 8px; text-align: center; text-transform: none;}.TlfmSc{font-family: Roboto, sans-serif; font-size: 15pt; font-weight: 500; letter-spacing: 1.5px; text-transform: none;}.PsKE7e{font-family: "Open Sans", sans-serif; font-size: 12pt;}.IKA38e{line-height: 1.58;}.hDrhEe{padding-bottom: 8px; padding-top: 8px;}.dhtgD:hover{text-decoration: underline;}.Zjiec:before{border-bottom-style: solid; border-bottom-width: 1px; border-color: rgba(83,115,145,1); margin-bottom: 30px; margin-left: auto; margin-right: auto; width: 212px; display: block;}.rgLkl{background-color: rgba(158,158,158,1);}.zDUgLc{border-bottom-style: solid; border-bottom-width: 1px; border-color: rgba(204,204,204,1); opacity: 1;}.QmpIrf{background-color: rgba(87,108,126,1); border-color: rgba(255,255,255,1); color: rgba(255,255,255,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.xkUom{border-color: rgba(87,108,126,1); color: rgba(87,108,126,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.xkUom:hover{background-color: rgba(87,108,126,0.1000000015);}.KjwKmc{color: rgba(87,108,126,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px; line-height: 22px;}.KjwKmc:hover{background-color: rgba(87,108,126,0.1000000015);}.lQAHbd .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(83,115,145,1); color: rgba(83,115,145,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.lQAHbd .xkUom{border-color: rgba(255,255,255,1); color: rgba(255,255,255,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.lQAHbd .xkUom:hover{background-color: rgba(255,255,255,0.1000000015);}.lQAHbd .KjwKmc{color: rgba(255,255,255,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.lQAHbd .KjwKmc:hover{background-color: rgba(255,255,255,0.1000000015);}.cJgDec .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(83,115,145,1); color: rgba(83,115,145,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.cJgDec .xkUom{border-color: rgba(255,255,255,1); color: rgba(255,255,255,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.cJgDec .xkUom:hover{background-color: rgba(255,255,255,0.1000000015);}.cJgDec .KjwKmc{color: rgba(255,255,255,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.cJgDec .KjwKmc:hover{background-color: rgba(255,255,255,0.1000000015);}.tpmmCb .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(83,115,145,1); color: rgba(83,115,145,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.tpmmCb .xkUom{border-color: rgba(87,108,126,1); color: rgba(87,108,126,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.tpmmCb .xkUom:hover{background-color: rgba(87,108,126,0.1000000015);}.tpmmCb .KjwKmc{color: rgba(87,108,126,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.tpmmCb .KjwKmc:hover{background-color: rgba(87,108,126,0.1000000015);}.gk8rDe .QmpIrf{background-color: rgba(87,108,126,1); border-color: rgba(255,255,255,1); color: rgba(255,255,255,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.gk8rDe .xkUom{border-color: rgba(87,108,126,1); color: rgba(87,108,126,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.gk8rDe .xkUom:hover{background-color: rgba(87,108,126,0.1000000015);}.gk8rDe .KjwKmc{color: rgba(87,108,126,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.gk8rDe .KjwKmc:hover{background-color: rgba(87,108,126,0.1000000015);}.O13XJf .QmpIrf{background-color: rgba(255,255,255,1); border-color: rgba(83,115,145,1); color: rgba(83,115,145,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.O13XJf .xkUom{border-color: rgba(255,255,255,1); color: rgba(255,255,255,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.O13XJf .xkUom:hover{background-color: rgba(255,255,255,0.1000000015);}.O13XJf .KjwKmc{color: rgba(255,255,255,1); font-family: "Open Sans", sans-serif; font-size: 12pt; line-height: 22px;}.O13XJf .KjwKmc:hover{background-color: rgba(255,255,255,0.1000000015);}.Y4CpGd{font-family: "Open Sans", sans-serif; font-size: 12pt;}.CMArNe{background-color: rgba(230,231,231,1);}.TMjjoe{font-family: Roboto, sans-serif; font-size: 9pt; line-height: 1.2; margin-top: 0px;}.GBy4H .zDUgLc{border-bottom-width: 0px;}.GBy4H .TlfmSc{color: rgba(255,255,255,0.8700000048);}.GBy4H .Mz8gvb{color: rgba(255,255,255,0.8700000048);}.GBy4H .Mz8gvb.chg4Jd:focus:before{border-color: rgba(255,255,255,0.8700000048); display: block;}.GBy4H .iWs3gf{color: rgba(255,255,255,0.8700000048);}.GBy4H .wgxiMe{background-color: rgba(0,0,0,1);}.GBy4H .qV4dIc{color: rgba(255,255,255,0.8700000048);}.GBy4H .M9vuGd{color: rgba(255,255,255,0.8700000048);}.GBy4H .Zjiec{color: rgba(255,255,255,0.8700000048);}.GBy4H .Zjiec:before{border-color: rgba(255,255,255,0.8700000048); display: block;}.GBy4H .PsKE7e{color: rgba(255,255,255,0.8700000048);}.GBy4H .lhZOrc.PsKE7e{color: rgba(255,255,255,1);}.GBy4H .aJHbb:hover{color: rgba(255,255,255,1);}.GBy4H .jgXgSe:hover{color: rgba(255,255,255,1);}.GBy4H .M9vuGd:hover{color: rgba(255,255,255,1);}.GBy4H .j10yRb:hover{color: rgba(255,255,255,1);}.GBy4H .eBSUbc{color: rgba(255,255,255,0.8700000048);}.fOU46b .ZXW7w{color: rgba(255,255,255,1);}.fOU46b .GBy4H .zDUgLc{border-bottom-width: 0px; opacity: 1;}.fOU46b .GBy4H .TlfmSc{color: rgba(255,255,255,0.8700000048);}.fOU46b .GBy4H .YTv4We{color: rgba(255,255,255,0.8700000048);}.fOU46b .GBy4H .YTv4We.chg4Jd:focus:before{border-color: rgba(255,255,255,0.8700000048); display: block;}.fOU46b .GBy4H .Mz8gvb{color: rgba(255,255,255,0.8700000048);}.fOU46b .GBy4H .iWs3gf{color: rgba(255,255,255,0.8700000048);}.fOU46b .GBy4H .qV4dIc{color: rgba(255,255,255,0.8700000048);}.fOU46b .GBy4H .M9vuGd{color: rgba(255,255,255,0.8700000048);}.fOU46b .GBy4H .Zjiec{color: rgba(255,255,255,0.8700000048);}.fOU46b .GBy4H .Zjiec:before{border-color: rgba(255,255,255,0.8700000048); display: block;}.fOU46b .GBy4H .PsKE7e{color: rgba(255,255,255,0.8700000048);}.fOU46b .GBy4H .lhZOrc.PsKE7e{color: rgba(255,255,255,1);}.fOU46b .GBy4H .aJHbb:hover{color: rgba(255,255,255,1);}.fOU46b .GBy4H .jgXgSe:hover{color: rgba(255,255,255,1);}.fOU46b .GBy4H .M9vuGd:hover{color: rgba(255,255,255,1);}.fOU46b .LBrwzc .ZXW7w{color: rgba(0,0,0,1);}.fOU46b .LBrwzc .zDUgLc{opacity: 1; border-bottom-style: none;}.fOU46b .LBrwzc .Mz8gvb{color: rgba(33,33,33,1); border-bottom-style: none;}.LBrwzc .TlfmSc{color: rgba(33,33,33,1);}.LBrwzc .YTv4We{color: rgba(33,33,33,1);}.LBrwzc .YTv4We.chg4Jd:focus:before{border-color: rgba(33,33,33,1); display: block;}.LBrwzc .Mz8gvb{color: rgba(33,33,33,1); border-color: rgba(204,204,204,1); border-bottom-style: solid; border-bottom-width: 1px;}.LBrwzc .iWs3gf{color: rgba(106,106,106,1);}.LBrwzc .qV4dIc{color: rgba(106,106,106,1);}.LBrwzc .M9vuGd{color: rgba(33,33,33,1);}.LBrwzc .Zjiec{color: rgba(33,33,33,1);}.LBrwzc .Zjiec:before{border-color: rgba(33,33,33,1); display: block;}.LBrwzc .IKA38e{color: rgba(106,106,106,1);}.LBrwzc .lhZOrc.IKA38e{color: rgba(33,33,33,1);}.LBrwzc .eBSUbc{color: rgba(106,106,106,1);}.LBrwzc .hDrhEe:hover{color: rgba(33,33,33,1);}.LBrwzc .jgXgSe:hover{color: rgba(33,33,33,1);}.LBrwzc .M9vuGd:hover{color: rgba(33,33,33,1);}.QcmuFb{padding-left: 20px;}.vDPrib{padding-left: 40px;}.TBDXjd{padding-left: 60px;}.bYeK8e{padding-left: 80px;}.CuqSDe{padding-left: 100px;}.Havqpe{padding-left: 120px;}.JvDrRe{padding-left: 140px;}.o5lrIf{padding-left: 160px;}.yOJW7c{padding-left: 180px;}.rB8cye{padding-left: 200px;}.RuayVd{padding-right: 20px;}.YzcKX{padding-right: 40px;}.reTV0b{padding-right: 60px;}.vSYeUc{padding-right: 80px;}.PxtZIe{padding-right: 100px;}.ahQMed{padding-right: 120px;}.rzhcXb{padding-right: 140px;}.PBhj0b{padding-right: 160px;}.TlN46c{padding-right: 180px;}.GEdNnc{padding-right: 200px;}@media only screen and (min-width: 1280px){.yxgWrb{margin-left: 250px;}}@media only screen and (max-width: 479px){.Zjiec{font-size: 16pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.Zjiec{font-size: 18pt;}}@media only screen and (max-width: 479px){.TlfmSc{font-size: 14pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.TlfmSc{font-size: 14pt;}}@media only screen and (max-width: 479px){.duRjpb{font-size: 20pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.duRjpb{font-size: 23pt;}}@media only screen and (max-width: 479px){.JYVBee{font-size: 15pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.JYVBee{font-size: 17pt;}}@media only screen and (max-width: 479px){.OmQG5e{font-size: 13pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.OmQG5e{font-size: 13pt;}}@media only screen and (max-width: 479px){.Zjiec{font-size: 16pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.Zjiec{font-size: 18pt;}}@media only screen and (max-width: 479px){.TlfmSc{font-size: 14pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.TlfmSc{font-size: 14pt;}}@media only screen and (max-width: 479px){.TMjjoe{font-size: 9pt;}}@media only screen and (min-width: 480px) and (max-width: 767px){.TMjjoe{font-size: 9pt;}}section[id="h.719992e84ee91b44_1"] .IFuOkc:before{opacity: 0.1;}</style>
        
        <!--
        <script type="text/javascript" nonce="KuG4VGKGTGUsy6kfk21GUA">_at_config = [null,"AIzaSyCF97XfLoejM9NhWDAZeOcjC6kOEsEmv6A","897606708560-a63d8ia0t9dhtpdt4i3djab2m42see7o.apps.googleusercontent.com",null,null,"v2",null,null,null,null,null,null,null,"https://content.googleapis.com","SITES_%s",null,null,null,null,null,0,null,null,null,["AHKXmL2XERfABd4tn4Rmtt0XbWxc0DQr_JMVCDdZ1Bs_c76BYIWq9GHCvYn0u2rd7T0JvoU9FGMW",1,"CNqOtZfDleoCFZuSTwkdR1kF-w",1592832425805000,[14101418,14100834,14100810,5708766,14101026,14100043,5710567,5703839,5707413,5707711,14101090,5709137,5703022,5711080,5711530,14100878,14101414,14101382,5704621,14101350,5711994,14101017,14100894,14101218,14101226,5710359,5710768,14101410,5709888,14101346,5710806,14101310,14100978,14101246,14101390,14101254,14101362,14101010,14101054,5711206,5708061,14100031,14101338,14101374,5711929,14100946,14101446,14100064,5706832,5706601,5706836,14100049,5700016,14100170,5705837,14101370,14101078,14100854]
]
,"AHL0AtJHLq3r75o_1H-lCB_jTprYuV6O0Q:1592832425513",null,null,null,0,null,null,null,null,null,null,null,null,null,"https://drive.google.com",null,null,null,null,null,null,1,1,null,0,1,null,null,null,null,null,null,null,null,null,null,null,null,1,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,"v2internal","https://docs.google.com",null,null,null,null,null,null,"https://sites.google.com/new/?authuser\u003d0",null,null,null,null,null,0,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,1,"",null,null,"/_/sharing/share",null,null,null,null,null,null,null,null,null,5,null,null,"https://accounts.google.com/o/oauth2/auth","https://accounts.google.com/o/oauth2/postmessageRelay",null,null,null,null,78,"https://sites.google.com/new/?authuser\u003d0\u0026usp\u003dviewer_footer\u0026authuser\u003d0",1,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,[]
,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,null,null,null,null,null,0,null,null,null,null,null,null,null,null,null,null,null,"https://www.gstatic.com/atari/embeds/913211048dfa67f4be7864f4505a4b63/intermediate-frame-minified.html",0,null,"v2beta",null,null,null,null,null,null,4,"https://accounts.google.com/o/oauth2/iframe",null,null,null,null,null,null,"https://2096817123-atari-embeds.googleusercontent.com/embeds/16cb204cf3a9d4d223a0a3fd8b0eec5d/inner-frame-minified.html",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,1000,null,"https://sites.google.com/view/portalpacientes/videos",null,null,null,null,null,1,null,1,null,null,null,"https://ssl.gstatic.com/docs/common/cleardot.gif",null,null,null,null,null,null,null,null,null,null,null,null,1,null,null,null,null,null,null,1,null,null,0,null,null,null,null,null,null,0,null,"",null,1,1,null,0,0,null,null,null,0,null,0,null,null,null,null,null,null,null,null,null,null,0,null,null,null,1,1,null,null,null,1,null,null,null,null,0,0,0,null,null,[1592832425827,"atari_2020.24-Tue-0501_RC02","315902860","0",0]
,null,1,1,null,1,null,0,0,0]
; window.globals = {"enableAnalytics":true,"webPropertyId":"","showDebug":false,"hashedSiteId":"161f9a26756c164404be76d66ac194f54518db5e66b7eb0b09af8f9ff8e7ab5a","normalizedPath":"view/portalpacientes/videos","pageTitle":"Videos"}; function gapiLoaded() {if (globals.gapiLoaded == undefined) {globals.gapiLoaded = true;} else {globals.gapiLoaded();}}window.messages = []; window.addEventListener && window.addEventListener('message', function(e) {if (window.messages && e.data && e.data.magic == 'SHIC') {window.messages.push(e);}});
        </script>

-->
        
        <script src="https://apis.google.com/js/client.js?onload=gapiLoaded" nonce="KuG4VGKGTGUsy6kfk21GUA">
        </script>
        <script type="text/javascript" nonce="KuG4VGKGTGUsy6kfk21GUA">(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
/*

 Copyright 2011 Google LLC.
 SPDX-License-Identifier: Apache-2.0
*/
/*

 Copyright 2013 Google LLC.
 SPDX-License-Identifier: Apache-2.0
*/
/*

 Copyright 2020 Google LLC.
 SPDX-License-Identifier: Apache-2.0
*/
/*

 Copyright 2005 Google LLC.
 SPDX-License-Identifier: Apache-2.0
*/
var a=function(){this.c=""};a.prototype.toString=function(){return"SafeStyle{"+this.c+"}"};a.prototype.a=function(b){this.c=b};(new a).a("");var c=function(){this.b=""};c.prototype.toString=function(){return"SafeStyleSheet{"+this.b+"}"};c.prototype.a=function(b){this.b=b};(new c).a("");}).call(this);
</script>
    </head>
    <body dir="ltr" itemscope itemtype="http://schema.org/WebPage" id="yDmH0d" css="yDmH0d">
        <div jscontroller="pc62j" jsmodel="iTeaXe" jsaction="rcuQ6b:WYd;GvneHb:og1FDd;vbaUQc:uAM5ec;YBArc:dj7Cne;">
            <div jscontroller="X4BaPc" jsaction="rcuQ6b:WYd;o6xM5b:Pg9eo;HuL2Hd:mHeCvf;VMhF5:FFYy5e;sk3Qmb:HI1Mdd;">
                <div jscontroller="o1L5Wb" data-sitename="portalpacientes" data-universe="1" jsmodel="fNFZH" jsaction="Pe9H6d:cZFEp;WMZaJ:VsGN3;hJluRd:UADL7b;zuqEgd:HI9w0;tr6QDd:Y8aXB;MxH79b:xDkBfb;JIbuQc:SPXMTb(uxAMZ);" jsname="G0jgYd"><div jsname="gYwusb" class="p9b27">
                </div>
                <div jscontroller="RrXLpc" jsname="XeeWQc" role="banner" jsaction="keydown:uiKYid(OH0EC);rcuQ6b:WYd;zuqEgd:ufqpf;JIbuQc:XfTnxb(lfEfFf),AlTiYc(GeGHKb),AlTiYc(m1xNUe),zZlNMe(pZn8Oc);YqO5N:ELcyfe;">
                        <div jsname="bF1uUb" class="BuY5Fd" jsaction="click:xVuwSc;">
                    </div>
                    <div jsname="MVsrn" class="TbNlJb ">
                        <div role="button" class="U26fgb mUbCce fKz7Od h3nfre" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="GeGHKb" aria-label="Volver al sitio web" aria-disabled="false" tabindex="0" data-tooltip="Volver al sitio web"   data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
                            <div class="VTBa7b MbhUzd" jsname="ksKsZd">
                            </div>
                            <span jsslot class="xjKiLb">
                                <span class="Ce1Y1c" style="top: -12px">
                                    <svg class="V4YR2c" viewBox="0 0 24 24" focusable="false">
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                                    </svg>
                                    </span>
                                </span>
                        </div>
                        <div class="E2UJ5" jsname="M6JdT">
                            <div class="rFrNMe b7AJhc zKHdkd" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV" jsshadow jsname="OH0EC" aria-expanded="true">
                                <div class="aCsJod oJeWuf">
                                    <div class="aXBtI I0VJ4d Wic03c">
                                        <span jsslot class="A37UZe qgcB3c iHd5yb">
                                            <div role="button" class="U26fgb mUbCce fKz7Od i3PoXe" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="lfEfFf" aria-label="Buscar" aria-disabled="false" tabindex="0" data-tooltip="Buscar"   data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
                                                <div class="VTBa7b MbhUzd" jsname="ksKsZd">
                                                </div>
                                                <span jsslot class="xjKiLb">
                                                    <span class="Ce1Y1c" style="top: -12px">
                                                        <svg class="vu8Pwe" viewBox="0 0 24 24" focusable="false">
                                                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                                            <path d="M0 0h24v24H0z" fill="none"/>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="EmVfjc SKShhf" data-loadingmessage="CargandoÖ" jscontroller="qAKInc" jsaction="animationend:kWijWc;dyRcpb:dyRcpb" jsname="aZ2wEe">
                                                <div class="Cg7hO" aria-live="assertive" jsname="vyyg5">
                                                </div>
                                                <div jsname="Hxlbvc" class="xu46lf">
                                                    <div class="ir3uv uWlRce co39ub">
                                                        <div class="xq3j6 ERcjC">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                        <div class="HBnAAc">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                        <div class="xq3j6 dj3yTd">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ir3uv GFoASc Cn087">
                                                        <div class="xq3j6 ERcjC">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                        <div class="HBnAAc">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                        <div class="xq3j6 dj3yTd">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ir3uv WpeOqd hfsr6b">
                                                        <div class="xq3j6 ERcjC">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                        <div class="HBnAAc">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                        <div class="xq3j6 dj3yTd">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ir3uv rHV3jf EjXFBf">
                                                        <div class="xq3j6 ERcjC">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                        <div class="HBnAAc">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                        <div class="xq3j6 dj3yTd">
                                                            <div class="X6jHbb GOJTSe">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="button" class="U26fgb mUbCce fKz7Od JyJRXe" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="m1xNUe" aria-label="Volver al sitio web" aria-disabled="false" tabindex="0" data-tooltip="Volver al sitio web"   data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
                                                <div class="VTBa7b MbhUzd" jsname="ksKsZd">
                                                </div>
                                                <span jsslot class="xjKiLb">
                                                    <span class="Ce1Y1c" style="top: -12px">
                                                        <svg class="V4YR2c" viewBox="0 0 24 24" focusable="false">
                                                            <path d="M0 0h24v24H0z" fill="none"/>
                                                            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </span>
                                        <div class="Xb9hP">
                                            <input type="search" class="whsOnd zHQkBf" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Busca en este sitio web" value="" autofocus role="combobox"  data-initial-value=""/>
                                            <div jsname="LwH6nd" class="ndJi5d snByac" aria-hidden="true">
                                                Busca en este sitio web
                                            </div>
                                        </div>
                                        <span jsslot class="A37UZe sxyYjd MQL3Ob">
                                            <div role="button" class="U26fgb mUbCce fKz7Od Kk06A" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="pZn8Oc" aria-label="Borrar la b˙squeda" aria-disabled="false" tabindex="0" data-tooltip="Borrar la b˙squeda"   data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
                                                <div class="VTBa7b MbhUzd" jsname="ksKsZd">
                                                </div>
                                                <span jsslot class="xjKiLb">
                                                    <span class="Ce1Y1c" style="top: -12px">
                                                        <svg class="fAUEUd" viewBox="0 0 24 24" focusable="false">
                                                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                                            </path>
                                                            <path d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </span>
                                        <div class="i9lrp mIZh1c">
                                        </div>
                                        <div jsname="XmnwAc" class="OabDMe cXrdqd">
                                        </div>
                                    </div>
                                </div>
                                <div class="LXRPh">
                                    <div jsname="ty6ygf" class="ovnfwe Is7Fhb">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div jsname="tiN4bf">
                    <div class="M63kCb">
                    </div>
                    <div class="fktJzd AKpWA fOU46b yMcSQd Ly6Unf G9Qloe KuNac" jsname="UzWXSb" jscontroller="Md9ENb" jsaction="gsiSmd:Ffcznf;yj5fUd:cpPetb;HNXL3:q0Vyke;rcuQ6b:WYd;">
                        <header id="atIdViewHeader">
                            <div class="BbxBP G8QRnc K5Zlne" jsname="WA9qLc" jscontroller="RQOkef" jsaction="rcuQ6b:ywL4Jf;VbOlFf:ywL4Jf;FaOgy:ywL4Jf; keydown:Hq2uPe; wheel:Ut4Ahc;" data-top-navigation="true" data-is-preview="false">
                                <div class="VLoccc K5Zlne ELAV1d" jsname="rtFGi">
                                    <div class="Pvc6xe">
                                        <div jsname="I8J07e" class="TlfmSc">
                                            <a class="GAuSPc" jsname="jIujaf" href="/view/pagina-principal.php">
                                                <span class="QTKDff">Portal Pacientes
                                                </span>
                                            </a>
                                        </div>
                                        
                                    
                                    </div>
                                    <div jsname="mADGA" class="zDUgLc">
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div role="main" class="UtePc RCETm" dir="ltr">
                            <section id="h.719992e84ee91b44_1" class="yaqOZd LB7kq cJgDec tpmmCb O13XJf" style="">
                                <div class="Nu95r">
                                    <div  class="yaqOZd IFuOkc" style="background-size: cover; background-position: center center; background-image: url(https://lh6.googleusercontent.com/utrHE-6U8rCGgv8ubtdBXDVCrSyG_rZJuFS5d4FcUMGpsoEZpgS31q4_9VkBSR_YlcmItbcqUg=w16383);" jsname="LQX2Vd">
                                    </div>
                                </div>
                                <div class="mYVXT">
                                    <div class="LS81yb VICjCf" tabindex="-1">
                                        <div class="hJDwNd-AhqUyc-ibL1re JNdkSc L6cTce-purZT L6cTce-pSzOP">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hJDwNd-AhqUyc-Clt0zb purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                    <div class="oKdM2c Kzv0Me">
                                                        <div id="h.719992e84ee91b44_4" class="hJDwNd-AhqUyc-Clt0zb jXK9ad D2fZ2 OjCsFc wHaque GNzUNc">
                                                            <div class="jXK9ad-SmKAyb">
                                                                <div class="tyJCtd mGzaTb baZpAe lkHyyc">
                                                                    <h1 id="h.4li1xhrr6c5u" dir="ltr" class="zfr3Q duRjpb" style="text-align: center;">
                                                                        CuÌdate con nosotros
                                                                        
                                                                 </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hJDwNd-AhqUyc-R6PoUb JNdkSc L6cTce-purZT L6cTce-pSzOP">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="h.719992e84ee91b44_33" class="yaqOZd" style="">
                                <div  class="yaqOZd IFuOkc">
                                </div>
                                <div class="mYVXT">
                                    <div class="LS81yb VICjCf" tabindex="-1">
                                        <div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                    <div class="oKdM2c Kzv0Me">
                                                        <div id="h.719992e84ee91b44_30" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque GNzUNc">
                                                            <div class="jXK9ad-SmKAyb">
                                                                <div class="tyJCtd mGzaTb baZpAe">
                                                                    <h2 id="h.575vt68tc47c" dir="ltr" class="zfr3Q JYVBee" style="text-align: center;" tabindex="-1">
                                                                        <div jscontroller="Ae65rd" jsaction="touchstart:UrsOsc; click:KjsqPd; focusout:QZoaZ; mouseover:y0pDld; mouseout:dq0hvd;fv1Rjc:jbFSOd;CrfLRd:SzACGe;" class="CjVfdc">
                                                                            <div class="PPhIP rviiZ" jsname="haAclf">
                                                                                <div role="presentation" class="U26fgb mUbCce fKz7Od LRAOtb rm120e" jscontroller="mxS5xe" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow aria-describedby="h.575vt68tc47c" aria-label="Copiar el vÌnculo del tÌtulo" aria-disabled="false" data-tooltip="Copiar el vÌnculo del tÌtulo" aria-hidden="true" data-tooltip-position="top" data-tooltip-vertical-offset="12" data-tooltip-horizontal-offset="0">
                                                                                    <a class="FKF6mc TpQm9d" href="#h.575vt68tc47c" aria-label="Copiar el vÌnculo del tÌtulo" jsname="hiK3ld" role="button" aria-describedby="h.575vt68tc47c">
                                                                                        <div class="VTBa7b MbhUzd" jsname="ksKsZd">
                                                                                        </div>
                                                                                        <span jsslot class="xjKiLb">
                                                                                            <span class="Ce1Y1c" style="top: -11px">
                                                                                                <svg class="OUGEr uav4k" width="22px" height="22px" viewBox="0 0 24 24" fill="currentColor" focusable="false"><path d="M0 0h24v24H0z" fill="none"/>
                                                                                                    <path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/>
                                                                                                </svg>
                                                                                            </span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            ProtÈgete del COVID-19
                                                                        </div>
                                                                    
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="h.719992e84ee91b44_34" class="yaqOZd WxWicb" style="">
                                <div  class="yaqOZd IFuOkc">
                                </div>
                                <div class="mYVXT">
                                    <div class="LS81yb VICjCf" tabindex="-1">
                                        <div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId"><
                                                    div class="oKdM2c Kzv0Me">
                                                    <div id="h.719992e84ee91b44_37" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque">
                                                        <div class="jXK9ad-SmKAyb">
                                                            <div class="tyJCtd baZpAe">
                                                                <div class="iwQgFb" role="presentation">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="h.719992e84ee91b44_8" class="yaqOZd" style="">
                                <div  class="yaqOZd IFuOkc">
                                </div>
                                <div class="mYVXT">
                                    <div class="LS81yb VICjCf" tabindex="-1">
                                        <div class="hJDwNd-AhqUyc-qWD73c purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                    <div class="oKdM2c Kzv0Me">
                                                        <div id="h.719992e84ee91b44_17" class="hJDwNd-AhqUyc-qWD73c jXK9ad D2fZ2 OjCsFc wHaque">
                                                            <div class="jXK9ad-SmKAyb">
                                                                <div class="tyJCtd OWlOyc baZpAe">
                                                                    <div jscontroller="VYKRW" jsaction="rcuQ6b:rcuQ6b;">
                                                                        <div class="WIdY2d M1aSXe">
                                                                            <div jsname="WXxXjd" style="padding-top: 67.8518518519%">
                                                                            </div>
                                                                            <iframe jsname="L5Fo6c" class="YMEQtf" sandbox="allow-scripts allow-popups allow-forms allow-same-origin allow-popups-to-escape-sandbox" frameborder="0" aria-label="YouTube Video, SÕNTOMAS CORONAVIRUS - Hazlo por ti y por todos #CuidemonosEntreTodos" src="https://www.youtube.com/embed/TpbCKzw4k60" allowfullscreen>
                                                                            </iframe>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hJDwNd-AhqUyc-qWD73c purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                    <div class="oKdM2c Kzv0Me">
                                                        <div id="h.719992e84ee91b44_13" class="hJDwNd-AhqUyc-qWD73c jXK9ad D2fZ2 OjCsFc wHaque">
                                                            <div class="jXK9ad-SmKAyb">
                                                                <div class="tyJCtd OWlOyc baZpAe">
                                                                    <div jscontroller="VYKRW" jsaction="rcuQ6b:rcuQ6b;">
                                                                        <div class="WIdY2d M1aSXe">
                                                                            <div jsname="WXxXjd" style="padding-top: 67.8518518519%">
                                                                            </div>
                                                                            <iframe jsname="L5Fo6c" class="YMEQtf" sandbox="allow-scripts allow-popups allow-forms allow-same-origin allow-popups-to-escape-sandbox" frameborder="0" aria-label="YouTube Video, PREVENCI”N CORONAVIRUS - Hazlo por ti y por todos #CuidemonosEntreTodos" src="https://www.youtube.com/embed/xsk8VS5EsR4" allowfullscreen>
                                                                            </iframe>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="h.719992e84ee91b44_22" class="yaqOZd WxWicb" style="">
                                <div  class="yaqOZd IFuOkc">
                                </div>
                                <div class="mYVXT">
                                    <div class="LS81yb VICjCf" tabindex="-1">
                                        <div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                    <div class="oKdM2c Kzv0Me">
                                                        <div id="h.719992e84ee91b44_25" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque">
                                                            <div class="jXK9ad-SmKAyb">
                                                                <div class="tyJCtd baZpAe">
                                                                    <div class="iwQgFb" role="presentation">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="h.719992e84ee91b44_12" class="yaqOZd" style="">
                                <div  class="yaqOZd IFuOkc">
                                </div>
                                <div class="mYVXT">
                                    <div class="LS81yb VICjCf" tabindex="-1">
                                        <div class="hJDwNd-AhqUyc-qWD73c purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                    <div class="oKdM2c Kzv0Me">
                                                        <div id="h.719992e84ee91b44_9" class="hJDwNd-AhqUyc-qWD73c jXK9ad D2fZ2 OjCsFc wHaque">
                                                            <div class="jXK9ad-SmKAyb">
                                                                <div class="tyJCtd OWlOyc baZpAe">
                                                                    <div jscontroller="VYKRW" jsaction="rcuQ6b:rcuQ6b;">
                                                                        <div class="WIdY2d M1aSXe">
                                                                            <div jsname="WXxXjd" style="padding-top: 67.8518518519%">
                                                                            </div>
                                                                            <iframe jsname="L5Fo6c" class="YMEQtf" sandbox="allow-scripts allow-popups allow-forms allow-same-origin allow-popups-to-escape-sandbox" frameborder="0" aria-label="YouTube Video, AISLAMIENTO DOMICILIARIO ñ Hazlo por ti y por todos #CuidÈmonosEntreTodos" src="https://www.youtube.com/embed/TUt3CrW_R-4" allowfullscreen>
                                                                            </iframe>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hJDwNd-AhqUyc-qWD73c purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                    <div class="oKdM2c Kzv0Me">
                                                        <div id="h.719992e84ee91b44_5" class="hJDwNd-AhqUyc-qWD73c jXK9ad D2fZ2 OjCsFc wHaque">
                                                            <div class="jXK9ad-SmKAyb">
                                                                <div class="tyJCtd OWlOyc baZpAe">
                                                                    <div jscontroller="VYKRW" jsaction="rcuQ6b:rcuQ6b;">
                                                                        <div class="WIdY2d M1aSXe">
                                                                            <div jsname="WXxXjd" style="padding-top: 67.8518518519%">
                                                                            </div>
                                                                            <iframe jsname="L5Fo6c" class="YMEQtf" sandbox="allow-scripts allow-popups allow-forms allow-same-origin allow-popups-to-escape-sandbox" frameborder="0" aria-label="YouTube Video, Aislamiento Domiciliario - Hazlo por ti y por todos #CuidÈmonosEntreTodos" src="https://www.youtube.com/embed/2RmM42xwxgM" allowfullscreen>
                                                                            </iframe>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="h.719992e84ee91b44_26" class="yaqOZd WxWicb" style="">
                                <div  class="yaqOZd IFuOkc">
                                </div>
                                <div class="mYVXT">
                                    <div class="LS81yb VICjCf" tabindex="-1">
                                        <div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                    <div class="oKdM2c Kzv0Me">
                                                        <div id="h.719992e84ee91b44_29" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque">
                                                            <div class="jXK9ad-SmKAyb">
                                                                <div class="tyJCtd baZpAe">
                                                                    <div class="iwQgFb" role="presentation">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="Xpil1b">
                        </div>
                        <footer>
                            <section id="h.f7d565c2d9f2fa3_3" class="yaqOZd" style="">
                                <div  class="yaqOZd IFuOkc">
                                </div>
                                <div class="mYVXT">
                                    <div class="LS81yb VICjCf" tabindex="-1">
                                        <div class="hJDwNd-AhqUyc-uQSCkd purZT-AhqUyc-II5mzb pSzOP-AhqUyc-qWD73c JNdkSc">
                                            <div class="JNdkSc-SmKAyb">
                                                <div class="" jscontroller="sGwD4d" jsaction="zXBUYb:zTPCnb;zQF9Uc:Qxe3nd;" jsname="F57UId">
                                                    <div class="oKdM2c Kzv0Me">
                                                        <div id="h.f7d565c2d9f2fa3_0" class="hJDwNd-AhqUyc-uQSCkd jXK9ad D2fZ2 OjCsFc wHaque GNzUNc">
                                                            <div class="jXK9ad-SmKAyb">
                                                                <div class="tyJCtd mGzaTb baZpAe">
                                                                    <p dir="ltr" class="zfr3Q" style="margin-left: 11pt; margin-right: 11pt; padding-left: 0; text-align: center; text-indent: 0;">
                                                                        <span style="font-family: Open Sans; font-size: 12pt; font-style: normal; font-weight: normal; text-decoration: normal; vertical-align: baseline;">
                                                                            © Box Virtual 2020. Todos los derechos reservados
                                                                        </span> www.ticline.cl
                                                                    </p>
                                                                    <small id="h.srh2v8iz06pk" dir="ltr" class="zfr3Q TMjjoe" style="display: block;"><br></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </footer>
                        <div jscontroller="j1RDQb" jsaction="rcuQ6b:rcuQ6b;MxH79b:JdcaS;FaOgy:XuHpsb;" class="dZA9kd ynRLnc" data-last-updated-at-time="1592797584799">
                            <div role="button" class="U26fgb JRtysb WzwrXb I12f0b K2mXPb zXBiaf ynRLnc" jscontroller="iSvg6e" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;;keydown:I481le;" jsshadow jsname="Bg3gkf" aria-label="Acciones del sitio web" aria-disabled="false" tabindex="0" aria-haspopup="true" aria-expanded="false" data-menu-corner="bottom-start" data-anchor-corner="top-start">
                                <div class="NWlf3e MbhUzd" jsname="ksKsZd">
                                </div>
                                <span jsslot class="MhXXcc oJeWuf">
                                    <span class="Lw7GHd snByac">
                                        <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class=" NMm5M">
                                            <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"/>
                                        </svg>
                                    </span>
                                </span>
                                <div jsname="xl07Ob" style="display:none" aria-hidden="true">
                                    <div class="JPdR6b hVNH5c" jscontroller="uY3Nvd" jsaction="IpSVtb:TvD9Pc;fEN2Ze:xzS4ub;frq95c:LNeFm;cFpp9e:J9oOtd; click:H8nU8b; mouseup:H8nU8b; keydown:I481le; keypress:Kr2w4b; blur:O22p3e; focus:H8nU8b" role="menu" tabindex="0" style="position:fixed">
                                        <div class="XvhY1d" jsaction="mousedown:p8EH2c; touchstart:p8EH2c;">
                                            <div class="JAPqpe K0NPx">
                                                <span jsslot class="z80M1 FeRvI" jsaction="click:o6ZaF(preventDefault=true); mousedown:lAhnzb; mouseup:Osgxgf; mouseenter:SKyDAe; mouseleave:xq3APb;touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8(preventMouseEvents=true)" jsname="j7LFlb" data-disabled-tooltip="No se puede denunciar un uso inadecuado en el modo de vista previa" aria-label="Notificar uso inadecuado" role="menuitem" tabindex="-1">
                                                    <div class="aBBjbd MbhUzd" jsname="ksKsZd">
                                                    </div>
                                                    <div class="uyYuVb oJeWuf" jscontroller="HYv29e" jsaction="JIbuQc:dQ6O0c;" jsname="xx9PJb" data-abuse-proto="%.@.null,&quot;102739515687794790010&quot;,&quot;https://sites.google.com/view/portalpacientes/videos&quot;,null,null,[],[]]">
                                                        <div class="jO7h3c">
                                                            Notificar uso inadecuado
                                                        </div>
                                                    </div>
                                                </span>
                                                <span jsslot class="z80M1 FeRvI" jsaction="click:o6ZaF(preventDefault=true); mousedown:lAhnzb; mouseup:Osgxgf; mouseenter:SKyDAe; mouseleave:xq3APb;touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8(preventMouseEvents=true)" jsname="j7LFlb" aria-label="Detalles de la p·gina" role="menuitem" tabindex="-1">
                                                    <div class="aBBjbd MbhUzd" jsname="ksKsZd">
                                                    </div>
                                                    <div class="uyYuVb oJeWuf" jsaction="JIbuQc:hriXLd;" jsname="Rg8K2c">
                                                        <div class="jO7h3c">
                                                            Detalles de la pagina
                                                        </div>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div jscontroller="j1RDQb" jsaction="focusin:gBxDVb(srlkmf); focusout:zvXhGb(srlkmf); click:ro2KTd(psdQ5e),Toy3n(V2zOu);JIbuQc:DSypkd(Bg3gkf);MxH79b:JdcaS;rcuQ6b:rcuQ6b;" class="LqzjUe ynRLnc" data-last-updated-at-time="1592797584799">
                            <div jsname="psdQ5e" class="Q0cSn">
                            </div>
                            <div jsname="bN97Pc" class="hBW7Hb">
                                <div role="button" class="U26fgb mUbCce fKz7Od kpPxtd QMuaBc" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;" jsshadow jsname="Bg3gkf" aria-label="Acciones del sitio web" aria-disabled="false" tabindex="-1" aria-hidden="true">
                                    <div class="VTBa7b MbhUzd" jsname="ksKsZd">
                                    </div>
                                    <span jsslot class="xjKiLb">
                                        <span class="Ce1Y1c" style="top: -12px">
                                            <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class=" NMm5M">
                                                <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"/>
                                            </svg>
                                        </span>
                                    </span>
                                </div>
                                <div jsname="srlkmf" class="hUphyc">
                                    <div class="YkaBSd">
                                        <div class="iBkmkf">
                                            <span>
                                                Pagina actualizada
                                            </span> 
                                            <span jsname="CFIm1b" class="dji00c" jsaction="AHmuwe:eGiyHb; mouseover:eGiyHb;" tabindex="0" role="contentinfo">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="YkaBSd">
                                        <div role="button" class="U26fgb kpPxtd J7BuEb" jsshadow jsname="V2zOu" aria-disabled="false" tabindex="0">Google Sites
                                        </div>
                                    </div>
                                    <div class="YkaBSd" jscontroller="HYv29e" jsaction="click:dQ6O0c;" data-abuse-proto="%.@.null,&quot;102739515687794790010&quot;,&quot;https://sites.google.com/view/portalpacientes/videos&quot;,null,null,[],[]]">
                                        <div role="button" class="U26fgb kpPxtd J7BuEb" jsshadow aria-label="Notificar uso inadecuado" aria-disabled="false" tabindex="0">
                                            Notificar uso inadecuado
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div jsname="kdb7zb">
                            <div jscontroller="kklOXe" jsmodel="nbZU0e" jsaction="rcuQ6b:rcuQ6b;FaOgy:nkegzf;BU3dg:U3QbAf;HRy4zb:Z8zbSc;" class="Qg1aof HnW5Jb">
                                <div class="t5XhQc" jsname="LgbsSe">
                                    <div jscontroller="TW9Rvc" jsaction="rcuQ6b:WYd;" tabindex="0">
                                        <div role="presentation" class="U26fgb XHsn7e MAXCNe" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow jsname="LgbsSe" aria-label="Editar esta p·gina" aria-disabled="false" data-tooltip="Editar esta p·gina"   data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0">
                                            <a class="FKF6mc TpQm9d" href="/u/0/d/139BrUDWqFQfwPK533qm1PZM2ZtJIYaiD/p/1U4hvF1d9gKQvztu1Jier1wCxlX_pMFwK/edit?authuser=0&amp;usp=edit_published_site" aria-label="Editar esta p·gina">
                                                <div class="HaXdpb wb61gb">
                                                </div>
                                                <div class="HRp7vf MbhUzd" jsname="ksKsZd">
                                                </div>
                                                <span jsslot class="Ip8zfc">
                                                    <svg class="EI709d" viewBox="0 0 24 24" fill="currentColor" focusable="false">
                                                        <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                                                        <path d="M0 0h24v24H0z" fill="none"/>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript" nonce="KuG4VGKGTGUsy6kfk21GUA">
                    DOCS_timing['cov']=new Date().getTime();
                </script>
                <script src="https://www.gstatic.com/_/atari/_/js/k=atari.vw.es.xUAjfgxRnMI.O/d=1/ct=zgms/rs=AGEqA5l6ZsDVUpZiFFsAY51e8IoP3O2CkQ/m=view" id="base-js" nonce="KuG4VGKGTGUsy6kfk21GUA">
                </script>
            </div>
        </div>
        <div jscontroller="YV8yqd" jsaction="rcuQ6b:npT2md">
            <div jsname="kODWGd" aria-live="assertive" aria-relevant="additions" aria-atomic="true" aria-hidden="false" role="region" class="IWfHH">
            </div>
        </div>
    </body>
</html>