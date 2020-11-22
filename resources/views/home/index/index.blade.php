@extends('home.layout.main')
{{--@section('title', 'Laravel学院')--}}
@section('content')

<div class="fuwu main1">
    <div class="container-fluid">
        <div class="title">
            <div class="text1">
                <div class="ying">service</div>
                <div class="zhong">服务项目<span>覆盖各大行业</span></div>
            </div>
            <div class="text2">胖大叔主要从事地下室防潮、防霉等施工</div>
        </div>
        <div class="swiper1">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($product_list as $item)
                    <div class="swiper-slide">
                        <a href="{{ route('home.product.index',[$item->cid,$item->id]) }}" class="imgbox tr1">
                            <div class="tu tr1">
                                <div class="img tr1 item23" data-original="{{ $item->pro_pic }}" style=" background:url(images/zhan.jpg) no-repeat center/cover">
                                    <img src="{{ asset('home') }}/static/images/fuwu.png" style="max-width:100%">
                                </div>
                            </div>
                            <div class="tou overflow tr1" title="">{{ $item->pro_name }}</div>
                            <div class="text">
                                {{ $item->cate->cname }}                           </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- <div class="swiper-button-prev swiper-button tr2"> </div>
            <div class="swiper-button-next swiper-button tr2"> </div> -->
        </div>
    </div>
</div>


<div class="show main1">
    <div class="container-fluid">
        <div class="title">
            <div class="text1">
                <div class="ying">show</div>
                <div class="zhong">服务展示<span>真材实料防霉施工</span></div>
            </div>
        </div>
        <div class="swiper2">
            <div class="swiper-container">
                <div class="swiper-wrapper" id="m_proList">

                    @foreach($pro_list as $pro)
                        {{--<div class="swiper-slide">--}}
                            <a href="{{ route('home.product.index',[$pro->cid,$pro->id]) }}" class="my_a imgbox tr1">
                                <div class="tu">
                                    <div class="img tr1 item23" data-original="{{ $pro->pro_pic }}" style=" background:url(images/zhan.jpg) no-repeat center/cover">
                                        <img src="{{ asset('home') }}/static/images/zhe.png" style="max-width:100%">
                                    </div>
                                </div>
                                <div class="tou overflow tr1" title="">{{ $pro->pro_name }}</div>
                            </a>
                        {{--</div>--}}
                    @endforeach

                </div>
            </div>
            <div class="swiper-button-prev swiper-button tr2"> </div>
            <div class="swiper-button-next swiper-button tr2"> </div>
        </div>
        <a href="{{ route('home.product.index') }}" class="more01 tr1">查看更多</a>
    </div>
</div>




<div class="youshi">
    <div class="toubu">
        <div class="container-fluid">
            <div class="tu">
                <img src="{{ asset('home') }}/static/images/youshi-tou.png" alt="" style="max-width:100%;">
            </div>
        </div>
    </div>
    <div class="hezi">
        <div class="container-fluid">
            <div class="imgbox">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tupian">
                            <img src="{{ asset('home') }}/static/images/youshi1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            <div class="tou">
                                为您的居所打造健康堡垒
                                <span>Build a health bastion for your residence</span>
                            </div>
                            <ul>
                                <li>提供产品、施工、培训、售后的全方位服务，</li>
                                <li>关注居住环境大健康产业及民生问题，</li>
                                <li>不忘初心服务始终如一。</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imgbox">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text">
                            <div class="tou">
                                工程质量从细节做起
                                <span>Engineering quality starts from the details</span>
                            </div>
                            <ul>
                                <li>长久保持干爽， </li>
                                <li>地下室返潮发霉的克星，</li>
                                <li>胖大叔是您的不二之选。</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tupian">
                            <img src="{{ asset('home') }}/static/images/youshi2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="jianjie main1">
    <div class="container-fluid">
        <div class="title title1">
            <div class="text1">
                <div class="ying">about us</div>
                <div class="zhong">走进灵琛<span>了解我们才能信任我们</span></div>
            </div>
        </div>
        <div class="hezi clearfix">
            <div class="left">
                <a href="about.php" class="imgbox tr1">
                    <div class="img tr2 item23" data-original="images/about.jpg" style=" background:url(images/zhan.jpg) no-repeat center/contain">
                        <img src="{{ asset('home') }}/static/images/about.png" style="max-width:100%">
                    </div>
                </a>
            </div>
            <div class="right">
                <div class="text">
                    <p>　　胖大叔品牌隶属于上海灵琛装饰工程有限公司，我们主要从事地下室防潮、防霉、防水等施工，服务对象包括工业园区、化工企业、厂房、物业小区等系统办公、生产类建筑和生活居住类建筑以及桥梁地铁隧道等建筑。<br style="box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);"/>　　地下室一直以来潮湿发霉是所有业主的老大难，或者是发愁问题，每当下雨天或者梅雨季节的时候所有客户的地下室或者底楼房间的地面墙面都会出现薄薄的一层水珠，或者像出汗一样的潮气，人呆在里面感觉特别潮湿难受，放在里面的东西都会发霉受潮烂掉十分让人无可奈何。现在我们团队经过不断的学习摸索经验完全解决了这个老大难问题，施工以后达到明显效果，可以达到二楼以上房屋的干糙程度，在不破坏施工面的情况下，可以保证长期干燥，如果达不到这个效果公司全额退款不收取任何费用并承诺长期保修。</p><p>　　本着立足上海、服务上海的企业精神，将确保对上海的建筑防水工程领域做出更大的贡献，以更加精湛的技术，更好的服务，为上海的建设做出更大的努力。</p>                </div>
            </div>
        </div>
        <a href="about.php" class="more01 tr1">查看更多</a>
    </div>
</div>




<div class="shipin main1">
    <div class="container-fluid">
        <div class="title">
            <div class="text1">
                <div class="ying">witness</div>
                <div class="zhong">客户见证<span>已经成功服务多家客户</span></div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-sm-4 col-xs-6 ">
                <div class="imgbox tr1">
                    <video width="100%" height="100%" controls="controls" poster="uploads/uploadpic/20200721172949wpkk.jpg">
                        <source src="uploads/uploadpic/20200721172949xxp2.mp4" type="video/ogg" />
                        <source src="uploads/uploadpic/20200721172949xxp2.mp4" type="video/mp4" />
                        <source src="uploads/uploadpic/20200721172949xxp2.mp4" type="video/webm" />
                        <object data="images/video.mp4" width="100%" height="100%">
                            <embed width="100%" height="100%" src="uploads/uploadpic/20200721172949xxp2.mp4" />
                        </object>
                    </video>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 ">
                <div class="imgbox tr1">
                    <video width="100%" height="100%" controls="controls" poster="uploads/uploadpic/20200721173000m6ky.jpg">
                        <source src="uploads/uploadpic/202007211730002hrf.mp4" type="video/ogg" />
                        <source src="uploads/uploadpic/202007211730002hrf.mp4" type="video/mp4" />
                        <source src="uploads/uploadpic/202007211730002hrf.mp4" type="video/webm" />
                        <object data="images/video.mp4" width="100%" height="100%">
                            <embed width="100%" height="100%" src="uploads/uploadpic/202007211730002hrf.mp4" />
                        </object>
                    </video>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 hidden-xs">
                <div class="imgbox tr1">
                    <video width="100%" height="100%" controls="controls" poster="uploads/uploadpic/20200721173012vstj.jpg">
                        <source src="uploads/uploadpic/20200721173012uag8.mp4" type="video/ogg" />
                        <source src="uploads/uploadpic/20200721173012uag8.mp4" type="video/mp4" />
                        <source src="uploads/uploadpic/20200721173012uag8.mp4" type="video/webm" />
                        <object data="images/video.mp4" width="100%" height="100%">
                            <embed width="100%" height="100%" src="uploads/uploadpic/20200721173012uag8.mp4" />
                        </object>
                    </video>
                </div>
            </div>
        </div>
        <a href="{{ route('home.video') }}" class="more01 tr1">查看更多</a>
    </div>
</div>



<div class="datu">
    <div class="container-fluid">
        <img src="{{ asset('home') }}/static/images/datu.png" alt="" style="max-width:100%;">
    </div>
</div>




<div class="news main1">
    <div class="container-fluid">
        <div class="title">
            <div class="text1">
                <div class="ying">news</div>
                <div class="zhong">灵琛动态<span>时刻更新新消息</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="left">
                    <a href="news.php?type_id=12" class="imgbox tr1 clearfix">
                        <div class="img tr1 item23" data-original="{{  $new_list['right'][0]['news'][0]['new_pic'] }}" style=" background:url(images/zhan.jpg) no-repeat center/cover">
                            <img src="{{ asset('home') }}/static/images/news.png" style="max-width: 100%">
                        </div>
                        <div class="tou overflow" title="">{{ $new_list['left']['0']['cname']}}</div>
                    </a>
                    <div class="box my_new_nav">
                        @foreach($new_list['left'][0]['news'] as $new_item)
                         <div class="wenzi tr">
                            <div class="clearfix">
{{--                                <div class="time"><b>{{ $new_item['view_count'] }}</b> {{ date_format($new_item['created_at'],'Y-m-d') }}</div>--}}
                                <div class="time"><b>{{ $new_item['view_count'] }}</b> {{ subStr_date($new_item['created_at']) }}</div>
                                <div class="you">
                                    <div class="zi overflow" title="">{{ $new_item['new_name'] }}</div>
                                </div>
                            </div>
                            <div class="text">
                                <a href="{{ url('/new/'. $new_item['cid'].'/'.$new_item['id']) }}" >{!!   str_limit($new_item['new_cont'], $limit = 280, $end = '...') !!}</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <a href="news.php?type_id=13" class="imgbox tr1 clearfix">
                        <div class="img tr1 item23" data-original="{{ $new_list['right']['0']['news'][0]['new_pic']}}" style=" background:url(images/zhan.jpg) no-repeat center/cover">
                            <img src="{{ asset('home') }}/static/images/news.png" style="max-width: 100%">
                        </div>
                        <div class="tou overflow" title="">{{ $new_list['right']['0']['cname']}}</div>
                    </a>
                    <div class="box my_new_nav">
                        @foreach($new_list['right'][0]['news'] as $new_item)
                            <div class="wenzi tr">
                                <div class="clearfix">
                                    <div class="time"><b>{{ $new_item['view_count'] }}</b> {{ subStr_date($new_item['created_at']) }}</div>
                                    <div class="you">
                                        <div class="zi overflow" title="">{{ $new_item['new_name'] }}</div>
                                    </div>
                                </div>
                                <div class="text">
                                   <a href="{{ url('/new/'. $new_item['cid'].'/'.$new_item['id']) }}" > {!!   str_limit($new_item['new_cont'], $limit = 240, $end = '...') !!}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('home.new.index') }}" class="more01 tr1">查看更多</a>
    </div>
</div>



<div class="lianxi main1">
    <div class="container-fluid">
        <div class="title">
            <div class="text1">
                <div class="ying">contact</div>
                <div class="zhong">联系我们<span>您可以通过以下方式联系我们</span></div>
            </div>
        </div>
        <div class="hezi">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <div class="biaoti hidden-sm hidden-xs">联系我们</div>
                        <div class="wenzi">
                            <div class="text">
                                <p><b>胖大叔</b></p><p>联系人：施经理</p><p>手机号：15821696629</p><p><img src="{{ asset('home') }}/static//uploads/uploadpic/1595495874419129.png" title="1595495874419129.png" alt="1.png"/></p><p>&nbsp; 扫一扫二维码，加我微信</p>                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                    <div class="right">
                        <div class="biaoti hidden-sm hidden-xs">在线咨询</div>
                        <form id="myForm"  name="myform">
                            <div class="hang">
                                <span>姓名：</span>
                                <input type="text" placeholder="您的姓名" id="msg_phone" name="msg_phone">
                            </div>
                            <div class="hang">
                                <span>电话：</span>
                                <input type="tel" placeholder="您的电话" id="msg_phone" name="msg_phone">
                            </div>

                            <div class="hang">
                                <span>内容：</span>
                                <textarea placeholder="留言内容" id="msg_content" name="msg_content"></textarea>
                                <input type="hidden" name="serialid" value="sn5f1160146a071b685c">
                            </div>
                            <div class="hang">
                                <button type="button" id="button1">提交</button>
                            </div>
                        </form>
                        <script>

                            $(document).ready(function(){
                                // 新闻列表
                                $('.my_new_nav').eq(0).find('.tr').eq(0).addClass('active');
                                $('.my_new_nav').eq(1).find('.tr').eq(1).addClass('active');



                                // 案例列表
                                var lis2n = $("#m_proList").find(".my_a:nth-child(2n)").each(function(i){
                                    // (i);
                                    $('.my_a').slice(i*2,i*2+2).wrapAll("<div class='swiper-slide'></div>");
                                });
                            });


                            $('#button1').on('click', function(){
                                $formdata = $('#myForm').serialize();
                                $.ajax({
                                    url:'https://ly.qijucn.com/v1/message/web',
                                    type:'get',
                                    data:$formdata,
                                    dataType:'jsonp',
                                    jsonp:'callback',
                                    jsonpCallback:'foo',

                                    beforeSend:function(){
                                        var x=document.forms["myform"]["msg_name"].value;
                                        if (x=="")
                                        {
                                            alert("请输入您的姓名！");
                                            myform.msg_name.focus();
                                            return (false);
                                        }

                                        var y=document.forms["myform"]["msg_phone"].value;
                                        if (y=="")
                                        {
                                            alert("请输入您的电话！");
                                            myform.msg_phone.focus();
                                            return (false);
                                        }
                                        // 异步开始
                                        console.log('send message start');
                                    },
                                    success:function(result){result},
                                    error:function(error){
                                        console.log('网络或服务器异常'+error);
                                        alert('稍后重试');
                                    },
                                    complete:function(){
                                        // 异步结束
                                        console.log('send message end');
                                    }
                                })
                            })

                            // 异步留言回调函数
                            function foo(data) {
                                // 打印结果
                                console.log(data);

                                // 弹窗 提示 data.info
                                alert(data.info);

                                // 重置表单
                                if (data.code == 1) {
                                    $('#myForm')[0].reset();
                                }

                            };
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection