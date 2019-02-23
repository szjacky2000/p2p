<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/com_pc.css"/>
        <link rel="stylesheet" type="text/css" href="../css/index_pc.css"/>
        <title>深圳格尔美互联网金融服务有限公司 - @yield('title')</title>
    </head>
    <body>
        <div id="head">@include('layouts.header')</div>
        <div id="bg_img">
            <div class="bimg_box">
                <div class="tips">
                    <p class="tp_1">金抽屉年化收益率</p>
                    <p class="tp_2">8%-12%</p>
                    <p class="tp_3">预期年化</p>
                    <p class="tp_4"><span>40</span>倍活期存款收益&nbsp;<span>5</span>倍定期存款收益</p>
                    <a href="" class="tips_signin">注册领红包</a>
                    <a href="" class="tips_register">已有账号？立即登录</a>
                </div>
            </div>
        </div>
        <div id="infor">
            <div class="in_box">
                <div class="inf_img">
                    <img src="../img/tb1.png"/>
                </div>
                <p class="in_p">震慑强势来袭——品牌钻饰免费任你白拿</p>
                <p class="in_t">2016-07-06</p>
                <span class="in_more">更多&gt;&gt;</span>
            </div>          
        </div>

        <div id="content">@yield('content')</div>


        <div id="con_bottom">
            <div class="bot_box">
                <p>注册用户<span>1.84万人</span></p>
                <p>累计投资<span>5442.22万元</span></p>
                <p>累计赚取<span>43.99万元</span></p>
            </div>
        </div>
        <div id="newlyweds">
            <p class="nw_top">新人专享<span class="nwp_sp1">100元起投</span><span class="nwp_sp2">*新人专享仅一次机会</span></p>
            <div class="nw_bottom">
                <div class="bot_left">
                    <div class="left_dl">
                        <img src="../img/sz1.png"/>
                        <p class="left_p1">注册送</p>
                        <p class="left_p2"><span>5000</span>元体验金</p>
                    </div>
                    <p class="left_p">----</p>
                    <div class="left_dl">
                        <img src="../img/sz2.png"/>
                        <p class="left_p1">绑卡送</p>
                        <p class="left_p2"><span>88</span>元红包</p>
                    </div>
                    <p class="left_p">----</p>
                    <div class="left_dl">
                        <img src="../img/sz3.png"/>
                        <p class="left_p1">首投</p>
                        <p class="left_p2">加息<span>2%</span></p>
                    </div>
                </div>
                <div class="bot_right">
                    <div class="rig_1">
                        <p class="rig_p1">10%+2%</p>
                        <p class="rig_p2">参考年回报率</p>
                    </div>
                    <div class="rig_2">
                        <p class="rig_p3">30天</p>
                        <p class="rig_p4">出售期限</p>
                    </div>
                    <div class="rig_3">
                        <a href="">立即加入</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mortgage">
            <p class="nw_top">项目专区<span class="nwp_sp2">更多&gt;&gt;</span></p>
            <div class="mor_box">
                <p class="box_top">抵押宝201801110001</p>
                <div class="box_bottom">
                    <div class="box_bo1">
                        <p class="mor_p1">11.0%</p>
                        <p class="mor_p2">参考年回报率</p>
                    </div>
                    <div class="box_bo2">
                        <p class="mor_p1">30天</p>
                        <p class="mor_p2">借款期限</p>
                    </div>
                    <div class="box_bo3">
                        <p class="mor_p1">100万</p>
                        <p class="mor_p2">借款金额</p>
                    </div>
                    <div class="box_bo4">
                        <p class="mor_p3"><span></span></p>
                        <p class="mor_p4">50%</p>
                    </div>
                    <div class="box_bo5">
                        <a href="#">立即加入</a>
                    </div>
                </div>
            </div>
            <div class="mor_box">
                <p class="box_top">抵押宝201801110001</p>
                <div class="box_bottom">
                    <div class="box_bo1">
                        <p class="mor_p1">11.0%</p>
                        <p class="mor_p2">参考年回报率</p>
                    </div>
                    <div class="box_bo2">
                        <p class="mor_p1">30天</p>
                        <p class="mor_p2">借款期限</p>
                    </div>
                    <div class="box_bo3">
                        <p class="mor_p1">100万</p>
                        <p class="mor_p2">借款金额</p>
                    </div>
                    <div class="box_bo4">
                        <p class="mor_p3"><span></span></p>
                        <p class="mor_p4">50%</p>
                    </div>
                    <div class="box_bo5">
                        <a href="#">立即加入</a>
                    </div>
                </div>
            </div>
            <div class="mor_box">
                <p class="box_top1">抵押宝201801110001</p>
                <div class="box_bottom">
                    <div class="box_bo1">
                        <p class="mor_p1">11.0%</p>
                        <p class="mor_p2">参考年回报率</p>
                    </div>
                    <div class="box_bo2">
                        <p class="mor_p1">30天</p>
                        <p class="mor_p2">借款期限</p>
                    </div>
                    <div class="box_bo3">
                        <p class="mor_p1">100万</p>
                        <p class="mor_p2">借款金额</p>
                    </div>
                    <div class="box_bo4">
                        <p class="mor_p3"><span></span></p>
                        <p class="mor_p4">50%</p>
                    </div>
                    <div class="box_bo5">
                        <a href="#" class="bg_c">立即加入</a>
                    </div>
                </div>
            </div>
            <div class="mor_box">
                <p class="box_top1">抵押宝201801110001</p>
                <div class="box_bottom">
                    <div class="box_bo1">
                        <p class="mor_p1">11.0%</p>
                        <p class="mor_p2">参考年回报率</p>
                    </div>
                    <div class="box_bo2">
                        <p class="mor_p1">30天</p>
                        <p class="mor_p2">借款期限</p>
                    </div>
                    <div class="box_bo3">
                        <p class="mor_p1">100万</p>
                        <p class="mor_p2">借款金额</p>
                    </div>
                    <div class="box_bo4">
                        <p class="mor_p3"><span></span></p>
                        <p class="mor_p4">50%</p>
                    </div>
                    <div class="box_bo5">
                        <a href="#" class="bg_c">立即加入</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="joab">
            <p class="nw_top">转让专区<span class="nwp_sp2">更多&gt;&gt;</span></p>
            <div class="mor_box">
                <p class="box_top">抵押宝201801110001</p>
                <div class="box_bottom">
                    <div class="box_bo1">
                        <p class="mor_p1">11.0%</p>
                        <p class="mor_p2">参考年回报率</p>
                    </div>
                    <div class="box_bo2">
                        <p class="mor_p1">30天</p>
                        <p class="mor_p2">借款期限</p>
                    </div>
                    <div class="box_bo3">
                        <p class="mor_p1">100万</p>
                        <p class="mor_p2">借款金额</p>
                    </div>
                    <div class="box_bo4">
                        <p class="mor_p3"><span></span></p>
                        <p class="mor_p4">50%</p>
                    </div>
                    <div class="box_bo5">
                        <a href="#">立即加入</a>
                    </div>
                </div>
                <div class="mor_box">
                <p class="box_top1">抵押宝201801110001</p>
                <div class="box_bottom">
                    <div class="box_bo1">
                        <p class="mor_p1">11.0%</p>
                        <p class="mor_p2">参考年回报率</p>
                    </div>
                    <div class="box_bo2">
                        <p class="mor_p1">30天</p>
                        <p class="mor_p2">借款期限</p>
                    </div>
                    <div class="box_bo3">
                        <p class="mor_p1">100万</p>
                        <p class="mor_p2">借款金额</p>
                    </div>
                    <div class="box_bo4">
                        <p class="mor_p3"><span></span></p>
                        <p class="mor_p4">50%</p>
                    </div>
                    <div class="box_bo5">
                        <a href="#" class="bg_c">立即加入</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div id="new">
            <div class="new_left">
                <p class="nw_top">公司动态<span class="nwp_sp2">更多&gt;&gt;</span></p>
                <div class="new_box_1">
                    <div class="nb">
                        <div class="nb_left">
                            <img src="../img/new_1.png"/>
                        </div>
                        <div class="nb_right">
                            <p><span class="p_sp1">是客服进来撒肯德基法拉盛快点放假啊乐山大佛</span><span class="p_sp2">2010-10-10</span></p>
                            <p class="nb_p">第三方公司的发生地方记录卡对方家里附近垃圾分类时代峰峻</p>
                        </div>
                    </div>
                    <div class="nb">
                        <div class="nb_left">
                            <img src="../img/new_1.png"/>
                        </div>
                        <div class="nb_right">
                            <p><span class="p_sp1">是客服进来撒肯德基法拉盛快点放假啊乐山大佛</span><span class="p_sp2">2010-10-10</span></p>
                            <p class="nb_p">第三方公司的发生地方记录卡对方家里附近垃圾分类时代峰峻</p>
                        </div>
                    </div>
                    <div class="nb">
                        <div class="nb_left">
                            <img src="../img/new_1.png"/>
                        </div>
                        <div class="nb_right">
                            <p><span class="p_sp1">是客服进来撒肯德基法拉盛快点放假啊乐山大佛</span><span class="p_sp2">2010-10-10</span></p>
                            <p class="nb_p">第三方公司的发生地方记录卡对方家里附近垃圾分类时代峰峻</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new_right">
                <p class="nw_top">媒体动态<span class="nwp_sp2">更多&gt;&gt;</span></p>
                <div class="new_box_2">
                    <div class="nb">
                        <div class="nb_left">
                            <img src="../img/new_1.png"/>
                        </div>
                        <div class="nb_right">
                            <p><span class="p_sp1">是客服进来撒肯德基法拉盛快点放假啊乐山大佛</span><span class="p_sp2">2010-10-10</span></p>
                            <p class="nb_p">第三方公司的发生地方记录卡对方家里附近垃圾分类时代峰峻</p>
                        </div>
                    </div>
                    <div class="nb">
                        <div class="nb_left">
                            <img src="../img/new_1.png"/>
                        </div>
                        <div class="nb_right">
                            <p><span class="p_sp1">是客服进来撒肯德基法拉盛快点放假啊乐山大佛</span><span class="p_sp2">2010-10-10</span></p>
                            <p class="nb_p">第三方公司的发生地方记录卡对方家里附近垃圾分类时代峰峻</p>
                        </div>
                    </div>
                    <div class="nb">
                        <div class="nb_left">
                            <img src="../img/new_1.png"/>
                        </div>
                        <div class="nb_right">
                            <p><span class="p_sp1">是客服进来撒肯德基法拉盛快点放假啊乐山大佛</span><span class="p_sp2">2010-10-10</span></p>
                            <p class="nb_p">第三方公司的发生地方记录卡对方家里附近垃圾分类时代峰峻</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div id="foot">@include('layouts.footer')</div>
    </body>
</html>
