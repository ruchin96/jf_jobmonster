<?php
    use yii\helpers\Url;
?>
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
    <!-- end page-header -->
    
    <!-- begin row -->
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-green">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                    <h4>TOTAL USERS</h4>
                    <p>3,291,922</p>    
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
                <div class="stats-info">
                    <h4>TOTAL COMPANIES</h4>
                    <p>20.44%</p>   
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-purple">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>TOTAL CANDIDATS</h4>
                    <p>1,291,922</p>    
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
                <div class="stats-info">
                    <h4>AVG TIME ON SITE</h4>
                    <p>00:12:23</p> 
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>
    <!-- end row -->
    <!-- begin row -->
    <div class="row">
        <!-- begin col-8 -->
        <div class="col-md-8">
            <div class="panel panel-inverse" data-sortable-id="index-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Website Analytics (Last 7 Days)</h4>
                </div>
                <div class="panel-body">
                    <div id="interactive-chart" class="height-sm"></div>
                </div>
            </div>
            
            <ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
                <li class="active"><a href="#latest-post" data-toggle="tab"><i class="fa fa-picture-o m-r-5"></i> <span class="hidden-xs">Latest Post</span></a></li>
                <li class=""><a href="#company" data-toggle="tab"><i class="fa fa-building m-r-5"></i> <span class="hidden-xs">New Companies</span></a></li>
                <li class=""><a href="#seeker" data-toggle="tab"><i class="fa fa-users m-r-5"></i> <span class="hidden-xs">New Candidats</span></a></li>
                <li class=""><a href="#email" data-toggle="tab"><i class="fa fa-envelope m-r-5"></i> <span class="hidden-xs">Email</span></a></li>
            </ul>
            <div class="tab-content" data-sortable-id="index-2-3">
                <div class="tab-pane fade active in" id="latest-post">
                    <div class="height-sm" data-scrollbar="true">
                        <ul class="media-list media-list-with-divider">
                            <li class="media media-lg">
                                <a href="javascript:;" class="pull-left">
                                    <img class="media-object" src="<?=Yii::getAlias('@web')?>/template/assets/img/gallery/gallery-1.jpg" alt="" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Aenean viverra arcu nec pellentesque ultrices. In erat purus, adipiscing nec lacinia at, ornare ac eros.</h4>
                                    Nullam at risus metus. Quisque nisl purus, pulvinar ut mauris vel, elementum suscipit eros. Praesent ornare ante massa, egestas pellentesque orci convallis ut. Curabitur consequat convallis est, id luctus mauris lacinia vel. Nullam tristique lobortis mauris, ultricies fermentum lacus bibendum id. Proin non ante tortor. Suspendisse pulvinar ornare tellus nec pulvinar. Nam pellentesque accumsan mi, non pellentesque sem convallis sed. Quisque rutrum erat id auctor gravida.
                                </div>
                            </li>
                            <li class="media media-lg">
                                <a href="javascript:;" class="pull-left">
                                    <img class="media-object" src="<?=Yii::getAlias('@web')?>/template/assets/img/gallery/gallery-10.jpg" alt="" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Vestibulum vitae diam nec odio dapibus placerat. Ut ut lorem justo.</h4>
                                    Fusce bibendum augue nec fermentum tempus. Sed laoreet dictum tempus. Aenean ac sem quis nulla malesuada volutpat. Nunc vitae urna pulvinar velit commodo cursus. Nullam eu felis quis diam adipiscing hendrerit vel ac turpis. Nam mattis fringilla euismod. Donec eu ipsum sit amet mauris iaculis aliquet. Quisque sit amet feugiat odio. Cras convallis lorem at libero lobortis, placerat lobortis sapien lacinia. Duis sit amet elit bibendum sapien dignissim bibendum.
                                </div>
                            </li>
                            <li class="media media-lg">
                                <a href="javascript:;" class="pull-left">
                                    <img class="media-object" src="<?=Yii::getAlias('@web')?>/template/assets/img/gallery/gallery-7.jpg" alt="" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Maecenas eget turpis luctus, scelerisque arcu id, iaculis urna. Interdum et malesuada fames ac ante ipsum primis in faucibus.</h4>
                                    Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque. Nam augue nulla, accumsan quis nisi a, facilisis eleifend nulla. Praesent aliquet odio non imperdiet fringilla. Morbi a porta nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
                                </div>
                            </li>
                            <li class="media media-lg">
                                <a href="javascript:;" class="pull-left">
                                    <img class="media-object" src="<?=Yii::getAlias('@web')?>/template/assets/img/gallery/gallery-8.jpg" alt="" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor accumsan rutrum.</h4>
                                    Fusce augue diam, vestibulum a mattis sit amet, vehicula eu ipsum. Vestibulum eu mi nec purus tempor consequat. Vestibulum porta non mi quis cursus. Fusce vulputate cursus magna, tincidunt sodales ipsum lobortis tincidunt. Mauris quis lorem ligula. Morbi placerat est nec pharetra placerat. Ut laoreet nunc accumsan orci aliquam accumsan. Maecenas volutpat dolor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="company">
                    <div class="height-sm" data-scrollbar="true">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th class="hidden-sm">Logo</th>
                                    <th>Company Name</th>
                                    <th>Category</th>
                                    <th>Website</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>13/02/2013</td>
                                    <td class="hidden-sm">
                                        <a href="javascript:;">
                                            <img src="<?=Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/company/company_logo/default/anonymous.png"?>" alt="" width="50" height="50"/>
                                        </a>
                                    </td>
                                    <td>
                                        <h6><a href="javascript:;">Good News From Indonesia</a></h6>
                                    </td>
                                    <td>Software Enginering</td>
                                    <td>www.organization.com</td>
                                    <td><a class="btn btn-xs btn-primary " href="<?=Url::to(['c-company/index'])?>"><i class="fa fa-arrow-circle-right"></i> Visit</a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="seeker">
                    <div class="height-sm" data-scrollbar="true">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th class="hidden-sm">Photo</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>13/02/2013</td>
                                    <td class="hidden-sm">
                                        <a href="javascript:;">
                                            <img src="<?=Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/company/company_logo/default/anonymous.png"?>" alt="" width="50" height="50"/>
                                        </a>
                                    </td>
                                    <td>
                                        <h6><a href="javascript:;">Muhammad Masruhin</a></h6>
                                    </td>
                                    <td>085731663633</td>
                                    <td><a class="btn btn-xs btn-warning" href="<?=Url::to(['s-seeker/index'])?>"><i class="fa fa-arrow-circle-right"></i> Visit</a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="email">
                    <div class="height-sm" data-scrollbar="true">
                        <ul class="media-list media-list-with-divider">
                            <li class="media media-sm">
                                <a href="javascript:;" class="pull-left">
                                    <img src="<?=Yii::getAlias('@web')?>/template/assets/img/user-1.jpg" alt="" class="media-object rounded-corner" />
                                </a>
                                <div class="media-body">
                                    <a href="javascript:;"><h4 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4></a>
                                    <p class="m-b-5">
                                        Aenean mollis arcu sed turpis accumsan dignissim. Etiam vel tortor at risus tristique convallis. Donec adipiscing euismod arcu id euismod. Suspendisse potenti. Aliquam lacinia sapien ac urna placerat, eu interdum mauris viverra.
                                    </p>
                                    <i class="text-muted">Received on 04/16/2013, 12.39pm</i>
                                </div>
                            </li>
                            <li class="media media-sm">
                                <a href="javascript:;" class="pull-left">
                                    <img src="<?=Yii::getAlias('@web')?>/template/assets/img/user-2.jpg" alt="" class="media-object rounded-corner" />
                                </a>
                                <div class="media-body">
                                    <a href="javascript:;"><h4 class="media-heading">Praesent et sem porta leo tempus tincidunt eleifend et arcu.</h4></a>
                                    <p class="m-b-5">
                                        Proin adipiscing dui nulla. Duis pharetra vel sem ac adipiscing. Vestibulum ut porta leo. Pellentesque orci neque, tempor ornare purus nec, fringilla venenatis elit. Duis at est non nisl dapibus lacinia.
                                    </p>
                                    <i class="text-muted">Received on 04/16/2013, 12.39pm</i>
                                </div>
                            </li>
                            <li class="media media-sm">
                                <a href="javascript:;" class="pull-left">
                                    <img src="<?=Yii::getAlias('@web')?>/template/assets/img/user-3.jpg" alt="" class="media-object rounded-corner" />
                                </a>
                                <div class="media-body">
                                    <a href="javascript:;"><h4 class="media-heading">Ut mi eros, varius nec mi vel, consectetur convallis diam.</h4></a>
                                    <p class="m-b-5">
                                        Ut mi eros, varius nec mi vel, consectetur convallis diam. Nullam eget hendrerit eros. Duis lacinia condimentum justo at ultrices. Phasellus sapien arcu, fringilla eu pulvinar id, mattis quis mauris.
                                    </p>
                                    <i class="text-muted">Received on 04/16/2013, 12.39pm</i>
                                </div>
                            </li>
                            <li class="media media-sm">
                                <a href="javascript:;" class="pull-left">
                                    <img src="<?=Yii::getAlias('@web')?>/template/assets/img/user-4.jpg" alt="" class="media-object rounded-corner" />
                                </a>
                                <div class="media-body">
                                    <a href="javascript:;"><h4 class="media-heading">Aliquam nec dolor vel nisl dictum ullamcorper.</h4></a>
                                    <p class="m-b-5">
                                        Aliquam nec dolor vel nisl dictum ullamcorper. Duis vel magna enim. Aenean volutpat a dui vitae pulvinar. Nullam ligula mauris, dictum eu ullamcorper quis, lacinia nec mauris.
                                    </p>
                                    <i class="text-muted">Received on 04/16/2013, 12.39pm</i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        
        </div>
        <!-- end col-8 -->
        <!-- begin col-4 -->
        <div class="col-md-4">
            <div class="panel panel-inverse" data-sortable-id="index-6">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Analytics Details</h4>
                </div>
                <div class="panel-body p-t-0">
                    <table class="table table-valign-middle m-b-0">
                        <thead>
                            <tr>    
                                <th>Source</th>
                                <th>Total</th>
                                <th>Trend</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><label class="label label-danger">Unique Visitor</label></td>
                                <td>13,203 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
                                <td><div id="sparkline-unique-visitor"></div></td>
                            </tr>
                            <tr>
                                <td><label class="label label-warning">Bounce Rate</label></td>
                                <td>28.2%</td>
                                <td><div id="sparkline-bounce-rate"></div></td>
                            </tr>
                            <tr>
                                <td><label class="label label-success">Total Page Views</label></td>
                                <td>1,230,030</td>
                                <td><div id="sparkline-total-page-views"></div></td>
                            </tr>
                            <tr>
                                <td><label class="label label-primary">Avg Time On Site</label></td>
                                <td>00:03:45</td>
                                <td><div id="sparkline-avg-time-on-site"></div></td>
                            </tr>
                            <tr>
                                <td><label class="label label-default">% New Visits</label></td>
                                <td>40.5%</td>
                                <td><div id="sparkline-new-visits"></div></td>
                            </tr>
                            <tr>
                                <td><label class="label label-inverse">Return Visitors</label></td>
                                <td>73.4%</td>
                                <td><div id="sparkline-return-visitors"></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="panel panel-inverse" data-sortable-id="index-7">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Visitors User Agent</h4>
                </div>
                <div class="panel-body">
                    <div id="donut-chart" class="height-sm"></div>
                </div>
            </div>
            
        </div>
        <!-- end col-4 -->
    </div>
    <!-- end row -->
</div>