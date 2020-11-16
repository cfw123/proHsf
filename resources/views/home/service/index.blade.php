@extends('home.layout.main')
@section('title', '我们的服务')
@section('content')
    @parent
    @section('sidebar')
        <!--导航大盒子 开始-->
        <div  class="menu overflow">
            服务中心<b class="overflow">Product list</b>
            <i class="hidden-lg hidden-md"></i>
            <span class="hidden-lg hidden-md glyphicon glyphicon-chevron-down"></span>
        </div>
        <div class="navbox">
            <a href="service.php?id=23" class="nav1 overflow tr1 ">服务流程</a>
        </div>
        <!--导航大盒子 结束-->
    @endsection

    @section('sideContent')
        <div class="col-md-9">
            <div class="right">
                <div class="title-zi hidden-sm hidden-xs">
                    <div class="zuo">服务流程</div>
                </div>
                <div class="cont">
                    <div class="about">
                        <p>一、联系我们</p><p>客户咨询</p><p>客户可以通过咨询热线向我公司进行地下室或者底楼房屋解决返潮、发霉处理工程方面的咨询，并可以根据客户要求实地参观防潮防霉处理过的地下室样板房，客户觉得满意后再去客户家现场实地观察并出其施工方案。&nbsp;</p><p>其他如下：</p><p>1、如果是地下室则观察是否有因房屋质量问题引起的开裂渗水情况关仔细查看是否有更多渗水点、渗水的力度再确定堵漏方案。再由客户确定。</p><p>2、堵漏结束后观察三到四天后再无渗水现象再开始后续的防潮防霉施工。修复后的渗水点公司免费保修叁年，如有因房屋下沉开裂再次产生的渗水情况不在公司保修责任范围之内。</p><p>3、确定方案后签定合同，其他细节双方协商后确定。</p><p>4、工程施工</p><p>改成施工人员进场后需要按施工方案进行施工并接受客户在现场监督。</p><p>5、后期维护防水保修&nbsp;&nbsp;</p><p>工程完成后我们会给客户承诺包修，如无人为或者不可抗拒因素的情况下（包括房屋下沉开裂引起的渗水）公司承诺干燥度可以达到二楼以上楼层的效果，如施工后无明显效果不收取任何费用，全额退款有效度达二十年以上。</p><p>6、合同签订后客户要先付30%的定金，其余等工程结束后下雨过后无返潮返湿现象达到理想效果后一次付清。</p><p>7、公司防霉防潮施工完毕，墙面包括进行刷白处理，用环保型乳胶漆（立邦、多乐士）材料，如另有增加装修项目，双方再行协商后再施工。</p><p>8、地面铺设木地板或者瓷砖、大理石等协商处理。</p><p>9、公司跟客户确定施工方案后应出具施工明细表，并由客户签字确认后再签订合同施工。</p><p>10、公司主营地下室地面、墙面出汗、返水、返潮处理工程，解决长久以来地下室、底楼房屋的潮湿发霉的老大难问题，效果明显，无任何不良后果，一样的材料，不一样的施工效果，力求让客户花较少的代价，达到圆满的效果。</p>                        </div>
                </div>
            </div>
        </div>

    @endsection


@endsection