@extends('home.layout.main')
@section('title', '关于我们')
@section('content')

    @parent

    @section('sidebar')
        <!--导航大盒子 开始-->
        <div  class="menu overflow">
            关于我们<b class="overflow">About Us</b>
            <i class="hidden-lg hidden-md"></i>
            <span class="hidden-lg hidden-md  iconfont icon-jiantouarrow483"></span>
        </div>

        <!--导航大盒子 结束-->
    @endsection


    @section('sideContent')


        <div class="col-md-9">
            <div class="right">
                <div class="title-zi hidden-sm hidden-xs">
                    <div class="zuo">走进秦荔豫</div>
                </div>

                <div class="cont">
                    <div class="about">
                        <p style="white-space: normal;">　　秦荔豫防水有限公司专注建筑屋的防水工程、补漏工程、加固工程、装修工程，钢结构防水维修工程等房层修缮工程，具有中国市场良好的口碑，专业解决了上万个建筑物的防水补漏工程项目，已成为建筑物的专业“医生”。我们主要从事地下室防潮、防霉、防水等施工，服务对象包括工业园区、化工企业、厂房、物业小区等系统办公、生产类建筑和生活居住类建筑以及桥梁地铁隧道等建筑。<br style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; background-color: rgb(255, 255, 255);"/>　　地下室一直以来潮湿发霉是所有业主的老大难，或者是发愁问题，每当下雨天或者梅雨季节的时候所有客户的地下室或者底楼房间的地面墙面都会出现薄薄的一层水珠，或者像出汗一样的潮气，人呆在里面感觉特别潮湿难受，放在里面的东西都会发霉受潮烂掉十分让人无可奈何。现在我们团队经过不断的学习摸索经验完全解决了这个老大难问题，施工以后达到明显效果，可以达到二楼以上房屋的干糙程度，在不破坏施工面的情况下，可以保证长期干燥，如果达不到这个效果公司全额退款不收取任何费用并承诺长期保修。</p><p style="white-space: normal;">　　秦荔豫防水有限公司凭借着专业精湛的防水施工技术，专业的施工团队，优越的施工方案、并获得广大客户的肯定与赞赏，彻底解决渗漏水问题，保证质量赢得各客户的友好合作。</p>                        </div>
                </div>
            </div>
        </div>

    @endsection


@endsection