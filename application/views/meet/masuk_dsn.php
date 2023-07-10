<style>
    #meeting{
        width:100%;
        height:500px;
    }
    .back{
        background-color:white;
        position:absolute;
        z-index: 0;
        top:0;
        margin-top:30px;
        margin-left:10px;
        width:30px;
        height:30px;
        border-radius:50%;
        display: flex;
        align-items:center;
        justify-content:center;
        color:black;
    }
    
</style>
<div class="container px-4 mt-3">
    <div class="row">
        <div class="col">
            <div id="meeting"></div>
            <a href="<?=base_url('Dosen/meet')?>" class="back"><i class="fas fa-times fa-xl"></i></a>
        </div>
    </div>
</div>
<?php
// echo '<div id="meeting" style="background-color: #757575; border: none; position: absolute; z-index: 2000; top: 0; width: 100%; left: 0; right: 0; bottom: 0; height: 100%;"></div>';
        echo '<a href="'.base_url('dosen').'" style="background: white; position: absolute; z-index: 1; left: 0; top: 0;  padding: 10px 13px; border-radius: 0 0 50% 0;color:black;"><i class="fas fa-times"></i></a>';
        echo '<script src="https://meet.jit.si/external_api.js"></script>';
        echo '<script>
            const options = {
                roomName: \''. $idMeet['link_url'] .'\',
                parentNode: document.querySelector(\'#meeting\')
            };
            const api = new JitsiMeetExternalAPI(\'meet.jit.si\', options);
        </script>';
?>