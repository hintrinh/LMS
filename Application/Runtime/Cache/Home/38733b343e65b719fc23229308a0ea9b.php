<?php if (!defined('THINK_PATH')) exit();?><div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">归还图书</strong> /
        <small>Return Book</small>
    </div>
</div>

<hr/>
<div class=" am-u-sm-12  ">
    <form class="am-form am-form-horizontal" method="post" action="<?php echo ($action); ?>">

        <div class="am-form-group am-u-sm-8 ">
            <div class="am-u-sm-4">
                <select id="bclass" name="class" data-am-selected="{ btnStyle: 'default'}" size="5">
                    <option value="bookname">书名</option>
                    <option value="author">作者</option>
                    <option value="isbn">ISBN码</option>
                </select>
            </div>

            <div class="am-u-sm-6">
                <input type="text" id="query_book" name="condition"  placeholder="可根据 书名 / 作者 / ISBN码 进行查询"/>
            </div>
            <div class="am-u-sm-2">
                <button class="am-btn am-btn-primary" id="submit" type="submit" style="width: 100%;">查询</button>
            </div>
        </div>


        <div class="am-g am-u-sm-12 am-u-md-12 " id="dataShow" style="margin-top: 10px">
            <table class="am-table  am-table-radius am-table-striped am-table-hover  am-scrollable-horizontal">
                <thead>
                <tr>
                    <th>id</th>
                    <th>书籍类别</th>
                    <th>书籍名称</th>
                    <th>书籍编码</th>
                    <th>作者</th>
                    <th>出版社</th>
                    <th>图书单价</th>
                    <th>入库时间</th>
                    <th>存放位置</th>
                    <th>入库数量</th>
                    <th>书籍简介</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["book_id"]); ?></td>
                        <td><?php echo ($vo["class"]); ?></td>
                        <td><?php echo ($vo["bookname"]); ?></td>
                        <td><?php echo ($vo["isbn"]); ?></td>
                        <td><?php echo ($vo["author"]); ?></td>
                        <td><?php echo ($vo["publish"]); ?></td>
                        <td><?php echo ($vo["tsdj"]); ?></td>
                        <td><?php echo ($vo["rksj"]); ?></td>
                        <td><?php echo ($vo["cfwz"]); ?></td>
                        <td><?php echo ($vo["rksl"]); ?></td>
                        <td><?php echo ($vo["intro"]); ?></td>
                        <td>
                            <div class="am-btn-group am-btn-group-xs">
                                <a class="am-btn  am-btn-success am-btn-xs " href="editBook/id/<?php echo ($vo["book_id"]); ?>">
                                    <span class="am-icon-leanpub am-text-sm">&nbsp;&nbsp;借阅</span>
                                </a>

                            </div>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div class="page am-margin am-u-sm-12 am-u-sm-centered am-cf">
                <?php echo ($page); ?>
            </div>

        </div>


</div>
<script>
    $("#submit").click(function(){
        var qclass=$("#bclass").find("option:selected").val();
        var bquery=$("#query_book").val();

        $.ajax({
            url:"Main/queryBook",
            type:"POST",
            data:{'a':qclass,'b':bquery},
            dataType:'json',
            success:function(data){
                alert(1);
            },
            error:function(){
                alert(2);
            }
        });
    })
</script>