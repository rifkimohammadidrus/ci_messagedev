<style>
    /* .tabs-section-nav .nav-link {
  
  border: solid 1px #edf2f6;
  
} */
.tabs-section-nav .nav-link.active .nav-link-in{
    /* padding: 15px 0px 15px 0px; */
    background-color: #edf2f6;
    border-top-color: #edf2f6;
    text-align: left;
}
/* tabs-section-nav .nav-link-in {
  display: flex;
} */
.tabs-section-nav .nav-link-in {
  /* display: block; */
  padding: 15px;
  text-align: left;
}
</style>

<div class="page-content">
    <div class="container-fluid messenger">

        <div class="box-typical chat-container">
            <section class="chat-list">
                <div class="chat-list-search chat-list-settings-header">
                        <div class="row">
                            <div class="col-sm-2 col-lg-2 action">
                                <a href="#"><span class="font-icon font-icon-cogwheel"></span></a>
                            </div>
                            <div class="col-sm-8 col-lg-8 text-center description">
                                Whatsapp Group
                            </div>
                            <div class="col-sm-2 col-lg-2 text-right action">
                                <a href="#"><span class="font-icon fa fa-pencil"></span></a>
                            </div>
                        </div>
                    </div><!--.chat-list-search-->
                <div class="tabs-section-nav tabs-section-nav-icons">
                        <!-- <div class="tbl"> -->
                    <ul class="nav" role="tablist">
                        <li  style="width:300px; border-color: white;"> <a class="nav-link active" href="#tabs-1-tab" role="tab" data-toggle="tab"></a></li>
                        <?php foreach ($group as $key => $val) { ?>    
                            <li  style="width:300px; border-color: white;">
                                <a class="nav-link" href="#tabs-1-tab-<?= $val['id_group']?>" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                    <?= $val['nama_group']?>
                                    </span>
                                </a>
                            </li>
                        <?php }?> 
                    </ul>
                        <!-- </div> -->
                </div>
            </section><!--.chat-list-->
            <section class="chat-area tab-content" style="margin-right: 0px;">
            <div style="margin-left: 300px;border-left: solid 1px #d8e2e7; " role="tabpanel" class="tab-pane fade in active show" id="tabs-1-tab"><div class="chat-dialog-area scrollable-block"><div class="messenger-dialog-area"></div></div><div class="chat-area-bottom"></div></div>
                <?php foreach ($group as $key => $val) { ?> 
                    <div style="margin-left: 300px;border-left: solid 1px #d8e2e7; " role="tabpanel" class="tab-pane fade" id="tabs-1-tab-<?= $val['id_group']?>">
                        <div class="chat-area-header">
                            <div class="chat-list-item online">
                                <div class="chat-list-item-name">
                                    <span class="name"><?= $val['nama_group']?></span>
                                </div>
                                <div class="chat-list-item-txt writing">Last seen 05 aug 2015 at 18:04</div>
                            </div>
                        </div><!--.chat-area-header-->
                        <div class="chat-dialog-area scrollable-block">
                            <div class="messenger-dialog-area"> 
                                <div class="messenger-message-container"> 
                                    <div class="messages ">
                                        <ul>
                                            <li> 
                                                <div class="message "> 
                                                    
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="chat-area-bottom">
                            <form class="write-message">
                                <div class="form-group row"> 
                                    <textarea rows="1" class="form-control" placeholder="Type a message"></textarea>
                                    <div class="dropdown dropdown-typical dropup attach">
                                        <a class="dropdown-toggle dropdown-toggle-txt"
                                        id="dd-chat-attach"
                                        data-target="#"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                            <span class="font-icon font-icon-clip"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-chat-attach">
                                            <a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-photo"></i>Photo</a>
                                            <a class="dropdown-item" href="#"><i class="font-icon font-icon-cam-video"></i>Video</a>
                                            <a class="dropdown-item" href="#"><i class="font-icon font-icon-sound"></i>Audio</a>
                                            <a class="dropdown-item" href="#"><i class="font-icon font-icon-page"></i>Document</a>
                                            <a class="dropdown-item" href="#"><i class="font-icon font-icon-earth"></i>Map</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!--.chat-area-bottom-->
                    </div><!--.chat-area-in-->
                <?php }?> 
            </section><!--.chat-area-->
        </div><!--.chat-container-->

    </div><!--.container-fluid-->
</div><!--.page-content-->
	