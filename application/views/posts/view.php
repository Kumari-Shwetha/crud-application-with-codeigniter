<div class="container">
     <div class="jumbotron mt-2">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><span>Post Details</span> <a href="<?php echo site_url('posts/'); ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-arrow-left"></i></a></div>
                <hr>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Title:</label>
                        <p><?php echo !empty($post['title'])?$post['title']:''; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Content:</label>
                        <p><?php echo !empty($post['content'])?$post['content']:''; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
