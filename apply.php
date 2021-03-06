<small>流程：阅读《申请人须知》—bbs注册—<strong>提交申请表格</strong>—初审—做一份教案—复审 且 教案审核通过—后台身份验证—行前准备—到京培训—到达支教地点
</small>
<hr>
<h1>OFS支教志愿者申请表
</h1><hr>
<form action="applyt.php" method="post" name="form1" >
<h3>决定前，请慎重考虑如下问题：</h3>
<p>
1. 您是否阅读过《<a href = "http://www.ourfreesky.org/ofs/recruit/teacher.html#1">申请人须知</a>》，并对其中提到的所有条款均已知悉？
<br><input type=checkbox name="notice" />已知悉</p>                                        
<p>2. 您目前的工作或学习是否属在职？
<br>                                          
<input type=radio value="quitted" name=work >已不在职</input><br>
如果您是在职，若通过申请，您计划：<br>
<input type=radio value="quit" name=work >离职去支教</input><br>
<input type=radio value="leave" name=work >向单位请假</input><br>
<input type=radio value="other" name=work >以其他方式保留职位</input>
<input type=text size=30 name="workdetail" /><br>
再去支教</p>
                                          
<p>3. 简述您的经济来源与状况，并权衡是否可支付支教过程中的基本生活费、路费的同时还能保留适当的备用金（支教活动没有任何经济报酬）。
<br><input type=text size=80 name="income" />
</p>
<p>                                          
4. 您何时开始有支教的想法？请简述您对支教的看法。
<br><input type=text size=80 name="think" />
</p>
<p>                                       
5. 您是否清楚支教所存在的风险，认为应该如何应对这些风险？
<br><input type=text size=80 name="risk" />
</p>
<p>                                       
                                          
6. 对于参与支教工作，您对自己有何期望或希望贡献什么？
<br><input type=text size=80 name="hope" />
</p>
<p>                                       
                                          
7. 您是否就计划去支教的想法与您周边的亲朋好友进行过沟通？他们对您计划支教的想法所持的态度如何？
<br><input type=text size=80 name="friend" />
</p>
<p>                                       
                                          
8. 请告知您的直系长辈亲属的联系方式，以便我们与您的家人联系，获取他们对您计划支教的支持程度。
<br><input type=text size=80 name="parent" />
</p>
<p>                                       
                                          
9. 您是否愿意提供近三个月内的体检报告以便我们对您的健康状况进行简单的评估。
<br><input type=checkbox name="healthy" />是
</p>
<hr>
<h3>个人基本资料：</h3>
<table>
<tr>
	<td>真实姓名</td><td><input type=text size=10 name="name" /></td>
	<td>性别</td><td><input type=text size=10 name="sex" /></td>
	<td>出生年份</td><td><input type=text size=10 name="birth" /></td>
	<td>教育程度</td><td><input type=text size=30 name="edu" /></td>
</tr><tr>
	<td>婚否</td><td><input type=text size=10 name="marriage" /></td>
	<td>民族</td><td><input type=text size=10 name="nation" /></td>
	<td>籍贯</td><td><input type=text size=10 name="hometown" /></td>
	<td>现居住地</td><td><input type=text size=30 name="liveplace" /></td>
</tr><tr>
	<td>手机</td><td><input type=text size=10 name="mobile" /></td>
	<td>其它电话</td><td><input type=text size=10 name="tel" /></td>
	<td>Email</td><td><input type=text size=10 name="email" /></td>
	<td>通信地址</td><td><input type=text size=30 name="addr" /></td>
</tr>
</table>
<br>受教育经历：
<table>
<tr><td>开始时间</td><td>结束时间</td><td>学校名称</td></tr>
<tr><td><input type=text size=10 name="edubegintime1" /></td><td>
<input type=text size=10 name="eduendtime1" /></td><td>
<input type=text size=20 name="edu1" />(中学)</td>
</tr>
<tr><td><input type=text size=10 name="edubegintime2" /></td><td>
<input type=text size=10 name="eduendtime2" /></td><td>
<input type=text size=20 name="edu2" />(大学)</td>
</tr>
<?php for($i=3;$i<=4;$i++) { ?>
<tr><td><input type=text size=10 name="edubegintime<?php echo $i?>" /></td><td>
<input type=text size=10 name="eduendtime<?php echo $i?>" /></td><td>
<input type=text size=20 name="edu<?php echo $i?>" /></td>
</tr>
<?php } ?>
</table>
<br>工作经历：
<table>
<tr><td>开始时间</td><td>结束时间</td><td>单位名称</td><td>职务</td></tr>
<?php for($i=1;$i<=4;$i++) { ?>
<tr><td><input type=text size=10 name="jobbegintime<?php echo $i?>" /></td><td>
<input type=text size=10 name="jobendtime<?php echo $i?>" /></td><td>
<input type=text size=20 name="job<?php echo $i?>" /></td><td>
<input type=text size=10 name="positon<?php echo $i?>" /></td>
</tr>
<?php } ?>
</table>
<hr>
<h3>其他资料：</h3>
<font color=red>家庭成员：
工作单位：</font>
<br>紧急联络人：
姓名：<input type=text size=10 name="EmergencyContactName" /> 
联系方式：<input type=text size=20 name="EmergencyContact" />
工作单位：<input type=text size=25 name="EmergencyContactWork" />
<table>
<tr><td>个人特别技能及资历：</td><td><input type=text size=73 name="ability" />
</td></tr><tr><td>有否伤残/病历： </td><td><input type=checkbox name="ill" />有<input type=text size=69 name="illdetail" />
</td></tr><tr><td>有否支教经验： </td><td><input type=checkbox name="exp" />有<input type=text size=69 name="expdetail" />
</td></tr><tr><td>预计支教期限：</td><td>
<input type=radio name="supporttime" value="1" />半年
<input type=radio name="supporttime" value="2" />一年
<input type=radio name="supporttime" value="0" />其它<input type=text size=20 name="supporttimedetail" />
</td></tr><tr><td>愿意开始支教的日期：</td><td><input type=text size=20 name="supportstart" />
</td></tr><tr><td>从何处得悉本服务的消息：</td><td><input type=text size=20 name="infosrc" />
</td></tr><tr><td>
照片（半身生活照为佳）：</td><td><input type=file name="photo" />
</td></tr>
</table>

<hr>
其他意见：<br>
<textarea cols=80 rows=10 name="other">
</textarea>
<hr>
<input type=submit value="保存" name="save" />
<input type=submit value="申请" name="apply" />
</form>
