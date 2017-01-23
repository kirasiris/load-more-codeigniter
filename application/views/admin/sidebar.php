<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="<?php echo base_url() ?>assets/admin/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url() ?>admin/dashboard/" class="simple-text">
                    <i class="pe-7s-home"></i> Dashboard
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?php echo base_url() ?>admin/dashboard/">
                        <i class="pe-7s-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>admin/berita/">
                        <i class="pe-7s-notebook"></i>
                        <p>Berita</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="<?php echo base_url() ?>admin/dashboard/logout/">
                        <i class="pe-7s-power"></i>
                        <p>Logout Sistem</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>