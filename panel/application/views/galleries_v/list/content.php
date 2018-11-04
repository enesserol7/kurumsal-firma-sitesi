<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Resim Listesi
            <?php if (isAllowedWriteModule()) { ?>
                <a href="<?php echo base_url("galleries/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
            <?php } ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">
            <?php if(empty($items)) { ?>
                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("galleries/new_form"); ?>">tıklayınız</a></p>
                </div>
            <?php } else { ?>
                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                        <th class="order"><i class="fa fa-reorder"></i></th>
                        <th class="w50">#id</th>
                        <th>Resim Adı</th>
                        <th>url</th>
                        <th>Görsel</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody class="sortable" data-url="<?php echo base_url("galleries/rankSetter"); ?>">
                        <?php foreach($items as $item) { ?>
                            <tr id="ord-<?php echo $item->id; ?>">
                                <td class="order"><i class="fa fa-reorder"></i></td>
                                <td class="w50 text-center">#<?php echo $item->id; ?></td>
                                <td class="text-center"><?php echo $item->title; ?></td>
                                <td class="text-center"><?php echo $item->url; ?></td>
                                <td class="text-center w100"><img width="75" src="<?php echo get_picture($viewFolder,$item->img_url,"750x450"); ?>" alt="" class="img-rounded"></td>
                                <td class="text-center"><input data-url="<?php echo base_url("galleries/isActiveSetter/$item->id"); ?>" class="isActive" type="checkbox" data-switchery data-color="#10c469"
                                    <?php echo ($item->isActive) ? "checked" : ""; ?> /></td>
                                <td class="text-center"><?php if (isAllowedDeleteModule()) { ?><button data-url="<?php echo base_url("galleries/delete/$item->id"); ?>" class="btn btn-sm btn-danger btn-outline remove-btn"><i class="fa fa-trash"></i> Sil</button><?php } ?>
                                    <?php if (isAllowedUpdateModule()) { ?>
                                        <a href="<?php echo base_url("galleries/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
        </div><!-- .widget -->
    </div><!-- END column -->
</div>
<!--<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
        	Galeri Listesi
        	<a href="<?php echo base_url("galleries/new_form"); ?>" class="pull-right btn btn-outline btn-primary btn-sm"><i class="fa fa-plus"></i>Yeni Ekle</a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">
        	<?php if (empty($items)) { ?>
        		<div class="alert alert-info text-center">
					<h5 class="alert-title">Kayıt Bulunamadı</h5>
					<p>Burada herhangi bir veri bulunmamaktadır. Ekleme için lütfen <a href="<?php echo base_url("galleries/new_form"); ?>">tıklayınız...</a></p>
				</div>
        	<?php }else { ?>
            <table class="table table-hover table-striped table-bordered content-container">

                <thead>
                    <th class="order"><i class="fa fa-reorder"></i></th>
                    <th class="w50">#id</th>
                    <th>Galeri Adı</th>
                    <th>Galeri Türü</th>
                    <th>Klasör Adı</th>
                    <th>url</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody class="sortable" data-url="<?php echo base_url("galleries/rankSetter"); ?>">
                	<?php foreach ($items as $item) { ?>
                		<tr id="ord-<?php echo $item->id; ?>">
                            <td class="order"><i class="fa fa-reorder"></i></td>
                        	<td class="w50 text-center">#<?php echo $item->id; ?></td>
                        	<td class="text-center"><?php echo $item->title; ?></td>
                            <td class="text-center"><?php echo $item->gallery_type; ?></td>
                            <td class="text-center"><?php echo $item->folder_name; ?></td>
                            <td class="text-center"><?php echo $item->url; ?></td>
                        	<td class="text-center">
                        		<input
                                    data-url="<?php echo base_url("galleries/isActiveSetter/$item->id"); ?>" 
                        			class="isActive" 
                        			type="checkbox" 
                        			data-switchery 
                        			data-color="#10c469" 
                        			<?php echo ($item->isActive) ? "checked" : ""; ?> 
                        		/>
                        	</td>
                        	<td class="text-center">
                            	<button data-url="<?php echo base_url("galleries/delete/$item->id"); ?>" class="btn btn-sm btn-danger btn-outline remove-btn"><i class="fa fa-trash"></i> Sil</button>
                            	<a href="<?php echo base_url("galleries/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                <?php if($item->gallery_type == "image"){$button_icon = "fa-image";}else if($item->gallery_type == "video"){$button_icon = "fa-play-circle-o";}else{$button_icon = "fa-folder";}?>
                                <a href="<?php echo base_url("galleries/upload_form/$item->id"); ?>" class="btn btn-sm btn-dark btn-outline"><i class="fa <?php echo $button_icon; ?>"></i> Galeriye Gözat</a>
                        	</td>
                    	</tr>
                	<?php } ?>                    
                </tbody>

            </table>
        <?php } ?>
        </div>
    </div>
</div>-->