<main>
  <div class="hive-wrapper">
    <div class="hive-buttons">
      <div class="apiary-title">
        <p>Apiary Hives</p>
        <div class="title-line"></div>
      </div>
      <svg width="200" height="200" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
        <!-- Created with SVG-edit - https://github.com/SVG-Edit/svgedit-->
        <g class="layer">
          <title>Layer 1</title>
          <polygon class="polygon-1" fill="#ffffff" id="svg_1" points="143.8333282470703,54.5 122.16667175292969,92.02777099609375 78.83332824707031,92.02777099609375 57.16667175292969,54.5 78.83332824707031,16.97222900390625 122.16667175292969,16.97222900390625 143.8333282470703,54.5 " stroke="#ff7f00" stroke-width="5" transform="rotate(90 100.5 54.5)"/>

          <polygon class="polygon-2" fill="#ffffff" id="svg_3" points="190.83334350585938,132.5 169.16665649414062,170.02777099609375 125.83334350585938,170.02777099609375 104.16665649414062,132.5 125.83334350585938,94.97222900390625 169.16665649414062,94.97222900390625 190.83334350585938,132.5 " stroke="#ff7f00" stroke-width="5" transform="rotate(90 147.5 132.5)"/>

          <polygon class="polygon-3" fill="#ffffff" id="svg_2" points="98.83334350585938,134.5 77.16665649414062,172.02777099609375 33.833343505859375,172.02777099609375 12.166656494140625,134.5 33.833343505859375,96.97222900390625 77.16665649414062,96.97222900390625 98.83334350585938,134.5 " stroke="#ff7f00" stroke-width="5" transform="rotate(90 55.5 134.5)"/>

          <text id="text_1" fill="#ff7f00" font-family="Sans-serif" font-size="35" font-style="normal" font-weight="bold" id="svg_2" stroke="#ff7f00" stroke-dasharray="null" stroke-tdnecap="null" stroke-tdnejoin="null" stroke-width="0" text-anchor="middle" x="101.35391" xml:space="preserve" y="67.03086">1</text>

          <text id="text_2" fill="#ff7f00" font-family="Sans-serif" font-size="35" font-style="normal" font-weight="bold" id="svg_5" stroke="#ff7f00" stroke-dasharray="null" stroke-tdnecap="null" stroke-tdnejoin="null" stroke-width="0" text-anchor="middle" x="54.91152" xml:space="preserve" y="146.17695">2</text>

          <text id="text_3" fill="#ff7f00" font-family="Sans-serif" font-size="47" font-weight="bold" id="svg_8" stroke="#ff7f00" stroke-dasharray="null" stroke-tdnecap="null" stroke-tdnejoin="null" stroke-width="0" text-anchor="middle" transform="matrix(0.385853 0 0 0.406638 96.4079 88.8595)" x="132.32569" xml:space="preserve" y="121.58161">close</text>
        </g>
      </svg>
    </div>
    
      <div class="hives-windows">
        <div class="hive-window-wrappers hive-1-wrapper">
          <div class="hive-1">
            <p class="hive-title">HIVE 1</p>
            <div class="title-line"></div>
            <table class="row-title">
              <tr class="title">
                <th>Date</th>
                <th>Weight</th>
                <th>Temp</th>
                <th>Productivity</th>
                <th>Harvest</th>
              </tr>
            <?php 
              $sql = "SELECT * FROM apiary_hive_1;";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  ?>
                    <tr class = "data-rows">
                      <td><?php echo $row['date_added'];?></td>
                      <td><?php echo $row['weight']." kg";?></td>
                      <td><?php echo $row['temperature']."°C";?></td>
                      <td><?php echo $row['produc']."%";?></td>
                      <td class="harvest"><?php echo $row['harvest'];?></td>
                    </tr>
            
                  <?php
                }
              }
              $conn->close();
            ?>
            </table>
          </div><!-- hive-1-end -->
          
        </div>
        <div class="hive-window-wrappers hive-2-wrapper">
          <div class="hive-2">
            <p class="hive-title">HIVE 2</p>
            <div class="title-line"></div>
            <table class="row-title">
              <tr class="title">
                <th>Date</th>
                <th>Weight</th>
                <th>Temp</th>
                <th>Productivity</th>
                <th>Harvest</th>
              </tr>
            <?php 
              include 'connect.php';
              $sql = "SELECT * FROM apiary_hive_2;";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  ?>
                    <tr class = "data-rows">
                      <td><?php echo $row['date_added'];?></td>
                      <td><?php echo $row['weight']." kg";?></td>
                      <td><?php echo $row['temperature']."°C";?></td>
                      <td><?php echo $row['produc']."%";?></td>
                      <td class="harvest"><?php echo $row['harvest'];?></td>
                    </tr>
            
                  <?php
                }
              }
              $conn->close();
            ?>
            </table>
          </div><!-- hive-2-end -->
        </div>
      </div>
      

      <!-- <div class="hive-window-wrappers hive-2-wrapper">
        <div class="hive-2">
          
        </div>
      </div> -->
    
  </div><!-- hive wrapper end -->
  

  
</main>