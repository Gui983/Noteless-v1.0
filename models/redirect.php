<?php
    class redirect{
        public function redirecionar($url){
            echo '<script>location.href="'.BASE_URL.$url.'"</script>';
            
        }
    }

?>