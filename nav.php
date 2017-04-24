    <header>

      <div class="upheader">

        <div class="upHeaderContainer">

          <div class="idArea">

            <div class="leftSide">

              <div class="playerIcon">

                <img  src="<?php echo $rank["data"]["avatar"]; ?>" alt="#" />

                <div class="playerLevel">

                  <span><?php echo $rank["data"]["level"]; ?></span>

                </div>

              </div>

            </div>

            <div class="mainSide">

              <div class="titleArea">

                <h1><?php echo $tag; ?></h1>

              </div>

              <div class="plformArea">

                <h2>on <?php echo $plat . " " . "(" . $reg . ")" ; ?></h2>

              </div>

            </div>

          </div>

          <div class="statArea">

            <div class="statContainer">

              <div class="statZone">

                <div class="playerInfo">

                  <div class="rankIconArea">

                    <img src="<?php echo $rank["data"]["competitive"]["rank_img"]; ?>" alt="bruh" />

                  </div>

                  <div class="rankNumberArea">

                    <span><?php echo $rank["data"]["competitive"]["rank"]; ?></span>

                  </div>

                </div>

                <div class="titleZone">

                  <span>Skill Rating</span>

                </div>

              </div>

              <div class="statZone">

                <div class="playerInfo">

                  <span>69 / 113</span>

                </div>

                <div class="titleZone">

                  <span>Success Done</span>

                </div>

              </div>

              <div class="statZone">

                <div class="playerInfo">

                  <span class="alc"><?php echo $rank["data"]["games"]["competitive"]["wins"] . " " . "-" . " " . $rank["data"]["games"]["competitive"]["lost"] ; ?></span>

                </div>

                <div class="titleZone">

                  <span>RANKED <br/>WIN / LOSS</span>

                </div>

              </div>

              <div class="statZone">

                <div class="playerInfo">

                  <span>53.8%</span>

                </div>

                <div class="titleZone">

                  <span>Win Percentage</span>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="downheader">

          <nav class="headerNavArea">

            <ul>

              <li><a href="#">Vue Générale</a></li>
              <li><a href="#">Héros</a></li>
              <li><a href="#">Tendances</a></li>
              <li><a href="#">Comparer</a></li>

            </ul>

          </nav>

          <div class="switcherModeArea">

            <div class="switcherZoneContainer">

              <div class="switcherZone">

                <div class="quickMatchZone">

                  <span><a href="#">Quick Match</a></span>

                </div>

                <div class="rankedMatchZone">

                  <span><a href="#">Ranked Match</a></span>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

</header>
