<header class="header">
    <div class="container-header">
        <div class="top-header">
            <div class="container">
                <div class="row row-top-header">
                    <div class="wrapper-logo">
                        <a href="">
                            <img src="images/klub-unesco-beograd.svg">                            
                        </a>
                    </div>
                    <div class="wrapper-navigation">
                        <nav class="navigation">
                            <ul class="ul-navigation">
                                <li>
                                    <a href=""><?php if($language == "sr"){ echo "Početna"; }else{ echo "Home"; } ?></a>
                                </li>
                                <li>
                                    <a href="o-nama/">O nama</a>
                                    
                                </li>
                                <li>
                                    <a href="razvojni-put/">Razvojni put</a>
                                </li>
                                <li class="li-activity">
                                    <span>Aktivnosti</span>
                                    <ul class="dropdown-activity">
                                        <li>
                                            <a href="aktivnosti/najnovije/">Najnovije</a>
                                        </li>
                                        <li>
                                            <a href="aktivnosti/medjunarodna-saradnja/">Međunarodna saradnja</a>
                                        </li>
                                        <li>
                                            <a href="aktivnosti/retrospektiva/">Retrospektiva</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-information">
                                    <span>Važne informacije</span>
                                    <ul class="dropdown-information">
                                        <li>
                                            <a href="vazne-informacije/povelja/">Povelja</a>
                                        </li>
                                        <li>
                                            <a href="vazne-informacije/preambule-ustavni-clan/">Preambule ustavni član</a>
                                        </li>
                                        <li>
                                            <a href="vazne-informacije/univerzalna-deklaracija-unesco-a-o-kulturnoj-raznolikosti/">Univerzalna deklaracija UNESCO-a o kulturnoj raznolikosti</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-programs">
                                    <span>Programi rada</span>
                                    <ul class="dropdown-programs">
                                        <li>
                                            <a href="program-rada/2022-23/">2022/23</a>
                                        </li>
                                        <li>
                                            <a href="program-rada/2021-22/">2021/22</a>
                                        </li>
                                        <li>
                                            <a href="program-rada/2020-21/">2020/21</a>
                                        </li>
                                        <li>
                                            <a href="program-rada/2019-20/">2019/20</a>
                                        </li>
                                        <li>
                                            <a href="program-rada/2018-19/">2018/19</a>
                                        </li>
                                        <li>
                                            <a href="program-rada/2017-18/">2017/18</a>
                                        </li>
                                        <li>
                                            <a href="program-rada/2016-17/">2016/17</a>
                                        </li>
                                        <li>
                                            <a href="program-rada/2015-16/">2015/16</a>
                                        </li>
                                        <li>
                                            <a href="program-rada/2014-15/">2014/15</a>

                                        <li>
                                            <a href="program-rada/2013-14/">2013/14</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-report">
                                    <span href="godisnji-izvestaji/">Godišnji izveštaji</span>
                                    <ul class="dropdown-report">
                                        <li>
                                            <a href="godisnji-izvestaj/2021-22/">2021/22</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2020-21/">2020/21</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2019-20/">2019/20</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2018-19/">2018/19</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2017-18/">2017/18</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2016-17/">2016/17</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2015-16/">2015/16</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2014-15/">2014/15</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2013-14/">2013/14</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2012-13/">2012/13</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2011-12/">2011/12</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2010-11/">2010/11</a>
                                        </li>
                                        <li>
                                            <a href="godisnji-izvestaj/2009-10/">2009/10</a>
                                        </li>     
                                    </ul>                   
                                </li>
                                <li>
                                    <a href="kontakt/">Kontakt</a>               
                                </li>
                            </ul>
                        </nav>
                        <div class="wrapper-languages">
                           <a href="">
                               <img src="images/serbian.png">
                           </a>
                           <a href="">
                               <img src="images/english.png">
                           </a>
                        </div>
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
        
    $(".ul-navigation .li-activity").hover(function(){
        $(this).children("ul").slideToggle(300);
    });

    $(".ul-navigation .li-information").hover(function(){
        $(this).children("ul").slideToggle(300);
    });

    $(".ul-navigation .li-programs").hover(function(){
        $(this).children("ul").slideToggle(300);
    });

    $(".ul-navigation .li-report").hover(function(){
        $(this).children("ul").slideToggle(300);
    });
</script>