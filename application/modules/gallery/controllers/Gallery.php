<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    

    function photo_gallery()
    {
        $data['title']="All City Movers Packers Photo Gallery | Our Moving Work";
        $data['description']="Explore the Photo gallery of All City Movers Packers showing safe packing, careful handling, professional moving teams, and successful relocation work.";
        $data['module']="gallery";
        $data['view_file']="photo-gallery";
        echo Modules::run('template/layout2',$data);
    }
     function video_gallery()
    {
        $data['title']="All City Movers Packers Video Gallery | Our Moving Work";
        $data['description']="Explore the Video gallery of All City Movers Packers showing safe packing, careful handling, professional moving teams, and successful relocation work.";
        $data['module']="gallery";
        $data['view_file']="video-gallery";
        echo Modules::run('template/layout2',$data);
    }

}