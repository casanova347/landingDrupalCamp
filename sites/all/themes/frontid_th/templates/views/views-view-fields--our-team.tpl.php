<div class="team-member">

    <div class="photo">
        <?php print $fields['field_photo']->content; ?>

        <div class="hover">

            <div class="content-absolute-centered">
                <div class="content">
                    <div class="inner">
                        <div class="vertical-content">

                            <div class="brief">
                                <?php print $fields['body']->content; ?>
                            </div>

                            <div class="social">

                                <?php if(!is_null($fields['field_web']->content)): ?>
                                <div class="item">
                                    <div class="abstracted-circle">
                                        <div class="inner">
                                            <!--Circle content-->
                                            <div class="content-absolute-centered">
                                                <div class="content">
                                                    <div class="inner">
                                                        <div class="vertical-content">
                                                            <!--absolute-centered content-->

                                                            <a href="<?php print $fields['field_web']->content; ?>" class="fa-chrome"></a>

                                                            <!--END absolute-centered content-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Circle content-->
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                                <?php if(!is_null($fields['field_tw']->content)): ?>

                                <div class="item">
                                    <div class="abstracted-circle">
                                        <div class="inner">
                                            <!--Circle content-->
                                            <div class="content-absolute-centered">
                                                <div class="content">
                                                    <div class="inner">
                                                        <div class="vertical-content">
                                                            <!--absolute-centered content-->
                                                            <a href="<?php print $fields['field_tw']->content; ?>" class="fa-twitter"></a>
                                                            <!--END absolute-centered content-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Circle content-->
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>


                                <?php if(!is_null($fields['field_bitbucket']->content)): ?>

                                <div class="item">
                                    <div class="abstracted-circle">
                                        <div class="inner">
                                            <!--Circle content-->
                                            <div class="content-absolute-centered">
                                                <div class="content">
                                                    <div class="inner">
                                                        <div class="vertical-content">
                                                            <!--absolute-centered content-->
                                                            <a href="<?php print $fields['field_bitbucket']->content; ?>" class="fa-bitbucket"></a>
                                                            <!--END absolute-centered content-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Circle content-->
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>


                                <?php if(!is_null($fields['field_github']->content)): ?>

                                <div class="item">
                                    <div class="abstracted-circle">
                                        <div class="inner">
                                            <!--Circle content-->
                                            <div class="content-absolute-centered">
                                                <div class="content">
                                                    <div class="inner">
                                                        <div class="vertical-content">
                                                            <!--absolute-centered content-->
                                                            <a href="<?php print $fields['field_github']->content; ?>" class="fa-github"></a>
                                                            <!--END absolute-centered content-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Circle content-->
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>


                                <?php if(!is_null($fields['field_fb']->content)): ?>

                                <div class="item">
                                    <div class="abstracted-circle">
                                        <div class="inner">
                                            <!--Circle content-->
                                            <div class="content-absolute-centered">
                                                <div class="content">
                                                    <div class="inner">
                                                        <div class="vertical-content">
                                                            <!--absolute-centered content-->
                                                            <a href="<?php print $fields['field_fb']->content; ?>" class="fa-facebook"></a>
                                                            <!--END absolute-centered content-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Circle content-->
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>


                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>


    <div class="info">
        <div class="name">
            <?php print $fields['title']->content; ?>
        </div>

        <div class="skill">
            <?php print $fields['field_skill']->content; ?>
        </div>
    </div>


</div>

