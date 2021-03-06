<?php if(!defined('HDWIKI_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('admin_header');?>
<script type="text/javascript">
function showCloseWebsiteReason(value){
	if (value == '0'){
		$("#closeWebsiteReason").hide();
	}else{
		$("#closeWebsiteReason").show();
	}
}

$(document).ready(function(){
	if ("<?php echo $basecfginfo['close_website']?>" == '1'){
		$("#closeWebsiteReason").show();
	}
	
	$(":radio[name*=close_website]").click(function(){
		showCloseWebsiteReason(this.value);
	});
});
</script>
<p class="map">全局：站点设置</p>
<form method="POST" action="index.php?admin_setting-base">
<table class="table">
	<colgroup>
		<col  style="width:300px;"></col>
		<col></col>
	</colgroup>
	<tr>
		<td><span>网站名称</span>
			<input maxlength="30" class="inp_txt" name="setting[site_name]" type="text" value="<?php echo $basecfginfo['site_name']?>" />
		</td>
		<td class="v-b" >网站名称，将显示在页面Title处</td>
	</tr>	
	<tr>
		<td><span>网站URL</span><input maxlength="120" class="inp_txt" name="setting[site_url]" type="text" value="<?php echo $basecfginfo['site_url']?>" /></td>
		<td class="v-b" ><p>网站 URL，作为网站资源的根路径使用<br/>
			如果更改此处URL，需要去后台重启云搜索，<br />以便云端初始化本站信息。<br />
			注: 本设置填写错误可能导致图片显示异常</p>
			</td>
	</tr>	
	<tr>
		<td><span>站内公告</span><textarea cols="45" name="setting[site_notice]" rows="5" class="textarea"><?php echo $setting['site_notice']?></textarea></td>
		<td class="v" ><p>站内公告可以由管理员自行添加，或者使用默认公告内容<br/> 
管理员自行修改文本框中的公告内容后，点击保存按钮<br/>  
如需使用默认公告内容，只需将公告内容留空即可。 <br/> </p>
</td>
	</tr>
	<tr>
		<td><span>网站备案信息</span><input maxlength="20" class="inp_txt" name="setting[site_icp]" type="text" value="<?php echo $basecfginfo['site_icp']?>" /></td>
		<td class="v-b" >如果网站已备案，在此输入，它将显示在页面底部，没有请留空</td>
	</tr>	
	<tr>
		<td><span>第三方统计代码</span><textarea class="textarea" rows="6" name="setting[statcode]" cols="50" ><?php echo $basecfginfo['statcode']?></textarea></td>
		<td class="v-t" ><p>页面底部可以显示第三方统计</p></td>
	</tr>
	<tr>
		
		<td><span>风格设置</span><br/>设置用户是否可自选多风格</td>
		<td>
			<label><input type="radio"  name="setting[style_user_select]" value="1" <?php if($basecfginfo['style_user_select']=='1') { ?>checked<?php } ?>/>是</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio"  name="setting[style_user_select]" value="0" <?php if($basecfginfo['style_user_select']=='0') { ?>checked<?php } ?>/>否</label>
		</td>
	</tr>
	<tr>
		<td><span>是否需要兼容以前版本模板</span><br />选择兼容，首页将获取以前模板所需的数据，否则不再获取数据。</td>
		<td>
			<label><input type="radio"  name="setting[compatible]" value="1" <?php if($basecfginfo['compatible']=='1') { ?>checked<?php } ?>/>是</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio"  name="setting[compatible]" value="0" <?php if($basecfginfo['compatible']=='0') { ?>checked<?php } ?>/>否</label>
		</td>
	</tr>
	<tr>
		<td><span>关闭网站</span><br />暂时将站点关闭，其他人无法访问，但不影响管理员访问。</td>
		<td>
			<label><input type="radio"  name="setting[close_website]" value="1" <?php if($basecfginfo['close_website']=='1') { ?>checked<?php } ?>/>是</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio"  name="setting[close_website]" value="0" <?php if($basecfginfo['close_website']=='0') { ?>checked<?php } ?>/>否</label>
		</td>
	</tr>
	<tr id="closeWebsiteReason" style="display:none">
		<td><span>关闭原因</span><font color=red>网站关闭后管理员登录方法：在地址栏输入 http://wiki路径/?user-login 即可正常登陆。</font></td>
		<td>
		<textarea class="textarea" name="setting[close_website_reason]" style="width:300px" rows="3"><?php echo $basecfginfo['close_website_reason']?></textarea>
		</td>
	</tr>
</table>
<p class="submit">
	<input class="inp_btn" name="settingsubmit" type="submit" value="保 存" />&nbsp;&nbsp;
	<input class="inp_btn" type="reset" value="重置" />
</p>
</form>
<?php include $this->gettpl('admin_footer');?>