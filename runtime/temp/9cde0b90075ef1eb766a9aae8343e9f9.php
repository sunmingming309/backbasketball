<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:84:"D:\phpstudy_pro\WWW\backbasketball\public/../application/admin\view\member\edit.html";i:1587096684;s:77:"D:\phpstudy_pro\WWW\backbasketball\application\admin\view\layout\default.html";i:1583049508;s:74:"D:\phpstudy_pro\WWW\backbasketball\application\admin\view\common\meta.html";i:1583049508;s:76:"D:\phpstudy_pro\WWW\backbasketball\application\admin\view\common\script.html";i:1583049508;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('User_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-user_name" class="form-control" name="row[user_name]" type="text" value="<?php echo htmlentities($row['user_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Password'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-password" class="form-control" name="row[password]" type="text" value="<?php echo htmlentities($row['password']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            
            <div class="radio">
            <?php if(is_array($statusList) || $statusList instanceof \think\Collection || $statusList instanceof \think\Paginator): if( count($statusList)==0 ) : echo "" ;else: foreach($statusList as $key=>$vo): ?>
            <label for="row[status]-<?php echo $key; ?>"><input id="row[status]-<?php echo $key; ?>" name="row[status]" type="radio" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['status'])?$row['status']:explode(',',$row['status']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Phone'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-phone" class="form-control" name="row[phone]" type="text" value="<?php echo htmlentities($row['phone']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Openid'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-openid" class="form-control" name="row[openid]" type="text" value="<?php echo htmlentities($row['openid']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Real_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-real_name" class="form-control" name="row[real_name]" type="text" value="<?php echo htmlentities($row['real_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Nick_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-nick_name" class="form-control" name="row[nick_name]" type="text" value="<?php echo htmlentities($row['nick_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Headavatar'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-headavatar" class="form-control" size="50" name="row[headavatar]" type="text" value="<?php echo htmlentities($row['headavatar']); ?>">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-headavatar" class="btn btn-danger plupload" data-input-id="c-headavatar" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-headavatar"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-headavatar" class="btn btn-primary fachoose" data-input-id="c-headavatar" data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-headavatar"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-headavatar"></ul>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Identity_frontal_image'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-identity_frontal_image" class="form-control" size="50" name="row[identity_frontal_image]" type="text" value="<?php echo htmlentities($row['identity_frontal_image']); ?>">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-identity_frontal_image" class="btn btn-danger plupload" data-input-id="c-identity_frontal_image" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-identity_frontal_image"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-identity_frontal_image" class="btn btn-primary fachoose" data-input-id="c-identity_frontal_image" data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-identity_frontal_image"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-identity_frontal_image"></ul>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Identity_verso_image'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-identity_verso_image" class="form-control" size="50" name="row[identity_verso_image]" type="text" value="<?php echo htmlentities($row['identity_verso_image']); ?>">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-identity_verso_image" class="btn btn-danger plupload" data-input-id="c-identity_verso_image" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-identity_verso_image"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-identity_verso_image" class="btn btn-primary fachoose" data-input-id="c-identity_verso_image" data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-identity_verso_image"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-identity_verso_image"></ul>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Province_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-province_name" class="form-control" name="row[province_name]" type="text" value="<?php echo htmlentities($row['province_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Province_code'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-province_code" class="form-control" name="row[province_code]" type="text" value="<?php echo htmlentities($row['province_code']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('City_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-city_name" class="form-control" name="row[city_name]" type="text" value="<?php echo htmlentities($row['city_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('City_code'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-city_code" class="form-control" name="row[city_code]" type="text" value="<?php echo htmlentities($row['city_code']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Area_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-area_name" class="form-control" name="row[area_name]" type="text" value="<?php echo htmlentities($row['area_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Area_code'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-area_code" class="form-control" name="row[area_code]" type="text" value="<?php echo htmlentities($row['area_code']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Profession'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-profession" class="form-control" name="row[profession]" type="text" value="<?php echo htmlentities($row['profession']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Genderdata'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            
            <div class="radio">
            <?php if(is_array($genderdataList) || $genderdataList instanceof \think\Collection || $genderdataList instanceof \think\Paginator): if( count($genderdataList)==0 ) : echo "" ;else: foreach($genderdataList as $key=>$vo): ?>
            <label for="row[genderdata]-<?php echo $key; ?>"><input id="row[genderdata]-<?php echo $key; ?>" name="row[genderdata]" type="radio" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['genderdata'])?$row['genderdata']:explode(',',$row['genderdata']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Age'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-age" class="form-control" name="row[age]" type="number" value="<?php echo htmlentities($row['age']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Stature'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-stature" class="form-control" name="row[stature]" type="number" value="<?php echo htmlentities($row['stature']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Bodyweight'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-bodyweight" class="form-control" step="0.01" name="row[bodyweight]" type="number" value="<?php echo htmlentities($row['bodyweight']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Self_introduction'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-self_introduction" class="form-control " rows="5" name="row[self_introduction]" cols="50"><?php echo htmlentities($row['self_introduction']); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Birthday'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-birthday" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[birthday]" type="text" value="<?php echo $row['birthday']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('School'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-school" class="form-control" name="row[school]" type="text" value="<?php echo htmlentities($row['school']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Maritalstatuslist'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-maritalstatuslist" class="form-control selectpicker" name="row[maritalstatuslist]">
                <?php if(is_array($maritalstatuslistList) || $maritalstatuslistList instanceof \think\Collection || $maritalstatuslistList instanceof \think\Paginator): if( count($maritalstatuslistList)==0 ) : echo "" ;else: foreach($maritalstatuslistList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['maritalstatuslist'])?$row['maritalstatuslist']:explode(',',$row['maritalstatuslist']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Educationlist'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-educationlist" class="form-control selectpicker" name="row[educationlist]">
                <?php if(is_array($educationlistList) || $educationlistList instanceof \think\Collection || $educationlistList instanceof \think\Paginator): if( count($educationlistList)==0 ) : echo "" ;else: foreach($educationlistList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['educationlist'])?$row['educationlist']:explode(',',$row['educationlist']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>