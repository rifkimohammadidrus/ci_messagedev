<style>
    /* .tabs-section-nav .nav-link {
  
  border: solid 1px #edf2f6;
  
} */
.tabs-section-nav .nav-link.active .nav-link-in{
    padding: 15px 0px 15px 0px;
    background-color: #edf2f6;
    border-top-color: #edf2f6;
}
/* tabs-section-nav .nav-link-in {
  display: flex;
} */
.tabs-section-nav .nav-link-in {
  display: block;
  padding: 15px;
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
                            Messenger
                        </div>
                        <div class="col-sm-2 col-lg-2 text-right action">
                            <a href="#"><span class="font-icon fa fa-pencil"></span></a>
                        </div>
                    </div>
                </div><!--.chat-list-search-->
            <div class="tabs-section-nav tabs-section-nav-icons">
					<!-- <div class="tbl"> -->
						<ul class="nav" role="tablist">
							<li  style="width:300px; border-color: white;">
								<a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Settings
									</span>
								</a>
							</li>
                           
							<li style="width:300px; border-color: white;">
								<a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<!-- <span class="glyphicon glyphicon-music"></span> -->
										Contacts
									</span>
								</a>
							</li>
							<li style="width:300px; border-color: white;">
								<a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<!-- <i class="fa fa-product-hunt"></i> -->
										Gateway
									</span>
								</a>
							</li>
							<li style="width:300px; border-color: white;">
								<a class="nav-link" href="#tabs-1-tab-4" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<!-- <i class="font-icon font-icon-users"></i> -->
										SSO
									</span>
								</a>
							</li>
							<li style="width:300px; border-color: white;">
								<a class="nav-link" href="#tabs-1-tab-5" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<!-- <i class="font-icon font-icon-home"></i> -->
										Billing
									</span>
								</a>
							</li>
							<li style="width:300px; border-color: white;">
								<a class="nav-link" href="#tabs-1-tab-6" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<!-- <i class="font-icon font-icon-speed"></i> -->
										Settings
									</span>
								</a>
							</li>
						</ul>
					<!-- </div> -->
				</div>
            </section><!--.chat-list-->

            <section class="chat-area" style="margin-right: 0px;">
                <div style="margin-left: 300px;border-left: solid 1px #d8e2e7; ">
                    <div class="chat-area-header">
                        <div class="chat-list-item online">
                            <div class="chat-list-item-name">
                                <span class="name">Thomas Bryan</span>
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
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade in active show" id="tabs-1-tab-1">Tab 1</div><!--.tab-pane-->
                                                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">Tab 2</div><!--.tab-pane-->
                                                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Tab 3</div><!--.tab-pane-->
                                                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">Tab 4</div><!--.tab-pane-->
                                                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-5">Tab 5</div><!--.tab-pane-->
                                                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-6">Tab 6</div><!--.tab-pane-->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>





                    <div class="chat-area-bottom">
                        <form class="write-message">
                            <div class="form-group">
                                <textarea rows="1" class="form-control" placeholder="Type a message"></textarea>
                                <div class="dropdown dropdown-typical dropup attach">
                                    <a class="dropdown-toggle dropdown-toggle-txt"
                                    id="dd-chat-attach"
                                    data-target="#"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                        <span class="font-icon fa fa-file-o"></span>
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
            </section><!--.chat-area-->

        </div><!--.chat-container-->

    </div><!--.container-fluid-->
</div><!--.page-content-->
	