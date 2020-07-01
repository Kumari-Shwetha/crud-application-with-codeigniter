<div class="container">
    <div class="jumbotron mt-2">
        <?php if(!empty($success_msg)){ ?>
        <div class="col-xs-12">
            <div class="alert alert-success"><?php echo $success_msg; ?></div>
        </div>
        <?php }elseif(!empty($error_msg)){ ?>
        <div class="col-xs-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-12">
                <div class="panel panel-default ">
                    <div class="panel-heading mb-4"><span>Posts</span> <a href="<?php echo site_url('posts/add/'); ?>" class="float-right btn btn-sm btn-info" >Add Post <i class="fas fa-plus"></i></a></div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="30%">Title</th>
                                <th width="50%">Content</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody id="userData">
                            <?php if(!empty($posts)): foreach($posts as $post): ?>
                            <tr>
                                <td><?php echo '#'.$post['id']; ?></td>
                                <td><?php echo $post['title']; ?></td>
                                <td><?php echo (strlen($post['content'])>150)?substr($post['content'],0,150).'...':$post['content']; ?></td>
                                <td>
                                    <a href="<?php echo site_url('posts/view/'.$post['id']); ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="<?php echo site_url('posts/edit/'.$post['id']); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo site_url('posts/delete/'.$post['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; else: ?>
                            <tr><td colspan="4">Post(s) not found......</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
