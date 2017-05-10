<div class="fly-panel detail-box">
    <h1><?=$detail->title;?></h1>
    <div class="fly-tip fly-detail-hint" data-id="{{rows.id}}">
        <span class="fly-tip-stick">置顶帖</span>
        <span class="fly-tip-jing">精帖</span>

        <span>未结贴</span>
         <span class="fly-tip-jie">已采纳</span>
         <span class="jie-admin" type="del" style="margin-left: 20px;">删除</span>
        <span class="jie-admin" type="set" field="stick" rank="1">置顶</span>
        <span class="jie-admin" type="set" field="stick" rank="0" style="background-color:#ccc;">取消置顶</span>
        <span class="jie-admin" type="set" field="status" rank="1">加精</span>
        <span class="jie-admin" type="set" field="status" rank="0" style="background-color:#ccc;">取消加精</span>

        <div class="fly-list-hint">
            <i class="iconfont" title="回答">&#xe60c;</i> 517
            <i class="iconfont" title="人气">&#xe60b;</i> 98032
        </div>
    </div>
    <div class="detail-about">
        <a class="jie-user" href="">
            <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0" alt="">
            <cite>
                贤心
                <em>1分钟前发布</em>
            </cite>
        </a>
        <div class="detail-hits" data-id="{{rows.id}}">
            <span style="color:#FF7200">悬赏：20飞吻</span>
            <span class="layui-btn layui-btn-mini jie-admin" type="edit"><a href="/jie/edit/{{rows.id}}">编辑此贴</a></span>
            <span class="layui-btn layui-btn-mini jie-admin " type="collect" data-type="add">收藏</span>
<!--            <span class="layui-btn layui-btn-mini jie-admin  layui-btn-danger" type="collect" data-type="add">取消收藏</span>-->
        </div>
    </div>

    <div class="detail-body photos" style="margin-bottom: 20px;">
        <?=$detail->content;?>
    </div>
</div>

<div class="fly-panel detail-box" style="padding-top: 0;">
    <a name="comment"></a>
    <ul class="jieda photos" id="jieda">

        <li data-id="12" class="jieda-daan">
            <a name="item-121212121212"></a>
            <div class="detail-about detail-about-reply">
                <a class="jie-user" href="">
                    <img src="../../res/images/avatar/default.png" alt="">
                    <cite>
                        <i>纸飞机</i>
                        <!-- <em>(楼主)</em>
                        <em style="color:#5FB878">(管理员)</em>
                        <em style="color:#FF9E3F">（活雷锋）</em>
                        <em style="color:#999">（该号已被封）</em> -->
                    </cite>
                </a>
                <div class="detail-hits">
                    <span>3分钟前</span>
                </div>
                <i class="iconfont icon-caina" title="最佳答案"></i>
            </div>
            <div class="detail-body jieda-body">
                <p>么么哒</p>
            </div>
            <div class="jieda-reply">
                <span class="jieda-zan zanok" type="zan"><i class="iconfont icon-zan"></i><em>12</em></span>
                <span type="reply"><i class="iconfont icon-svgmoban53"></i>回复</span>
                <!-- <div class="jieda-admin">
                  <span type="edit">编辑</span>
                  <span type="del">删除</span>
                  <span class="jieda-accept" type="accept">采纳</span>
                </div> -->
            </div>
        </li>

        <li data-id="13">
            <a name="item-121212121212"></a>
            <div class="detail-about detail-about-reply">
                <a class="jie-user" href="">
                    <img src="../../res/images/avatar/default.png" alt="">
                    <cite>
                        <i>香菇</i>
                        <em style="color:#FF9E3F">活雷锋</em>
                    </cite>
                </a>
                <div class="detail-hits">
                    <span>刚刚</span>
                </div>
            </div>
            <div class="detail-body jieda-body">
                <p>蓝瘦</p>
            </div>
            <div class="jieda-reply">
                <span class="jieda-zan" type="zan"><i class="iconfont icon-zan"></i><em>0</em></span>
                <span type="reply"><i class="iconfont icon-svgmoban53"></i>回复</span>
                <div class="jieda-admin">
                    <span type="edit">编辑</span>
                    <span type="del">删除</span>
                    <span class="jieda-accept" type="accept">采纳</span>
                </div>
            </div>
        </li>

        <!-- <li class="fly-none">没有任何回答</li> -->
    </ul>

    <div class="layui-form layui-form-pane">
        <form action="/jie/reply/" method="post">
            <div class="layui-form-item layui-form-text">
                <div class="layui-input-block">
                    <textarea id="L_content" name="content" required lay-verify="required" placeholder="我要回答"  class="layui-textarea fly-editor" style="height: 150px;"></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <input type="hidden" name="jid" value="{{rows.id}}">
                <button class="layui-btn" lay-filter="*" lay-submit>提交回答</button>
            </div>
        </form>
    </div>
</div>