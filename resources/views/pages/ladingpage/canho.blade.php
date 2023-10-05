<div class="section canho" style="background: url(frontend/imgs/capital-elite-new-01.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3>MẶT BẰNG CĂN HỘ ĐIỂN HÌNH</h3>
                <div id="ch1" class="tabcontent tabcontent2" style="display: block;">
                    <img style="width: 85%" src="frontend/imgs/matbang/mat-bang-can-ho-04-vi.png">
                </div> 
                <div id="ch2" class="tabcontent tabcontent2">
                    <img style="width: 85%" src="frontend/imgs/matbang/mat-bang-can-ho-05-vi.png"> 
                </div>
                <div id="ch3" class="tabcontent tabcontent2">
                    <img style="width: 85%" src="frontend/imgs/matbang/mat-bang-can-ho-06-vi.png">
                </div>
                <div id="ch4" class="tabcontent tabcontent2">
                    <img style="width: 85%" src="frontend/imgs/matbang/mat-bang-can-ho-07-vi.png">
                </div>
                
                <div class="detail">
                    <div class="macan">MÃ CĂN</div>
                    <div class="tab">
                        <button class="tablinks active" onclick="openCity(event, 'ch1')">CH-01 | CH-02 | CH-09 | CH10</button>
                        <button class="tablinks" onclick="openCity(event, 'ch2')">CH-03 | CH-07 | CH-12 | CH15A</button>
                        <button class="tablinks" onclick="openCity(event, 'ch3')">CH-05 | CH-06 | CH-12A | CH15</button>
                        <button class="tablinks" onclick="openCity(event, 'ch4')">CH-02A | CH-08 | CH-11 | CH16</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
<style type="text/css">
    .detail .tab button{ width: 46%; margin: 10px; border-radius: 5px; }
    .canho{display: flex;align-items: center;}
    .canho h3{ text-align: center;
        color: #bd956c;
        margin-bottom: 4rem;
        font-size: 4rem;
        font-weight: bold;
    }
    .canho .detail{
        width: 85%;
        margin: 0 auto;
        margin-top: 50px;
        display: flex;
    }
    .canho .macan{
        background: #fff;
        font-weight: bold;
        font-size: 45px;
        border-radius: 5px;
        padding: 20px 15px 5px;
        white-space: nowrap;
        margin: 10px;
    }


    /* Style the tab */
.tab {
  overflow: hidden;
}

/* Style the buttons inside the tab */
.tab button {
  float: left;
  padding: 7px;
  transition: 0.3s;
  font-size: 17px;
  background: #bd956c;
  border: none;
  font-weight: bold;
}

/* Change background color of buttons on hover */
.tab button:hover {
  color: #fff;
}

/* Create an active/current tablink class */
.tab button.active {
  color: #fff;
}

/* Style the tab content */
.tabcontent {
  display: none;
}
</style>

<script>

</script>