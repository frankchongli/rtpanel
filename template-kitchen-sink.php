<?php
/**
 * Template Name: Kitchen Sink Template
 *
 * @package rtPanel
 *
 * @since rtPanel 2.0
 */
get_header();
$content_width = $max_content_width; ?>

    <section id="content" class="rtp-content-section rtp-full-width-content">
        <?php rtp_hook_begin_content(); ?>

        <div id="kitchen-sink" class="row">
            <div class="large-12 columns">
                <div class="row">
                    <div class="large-12 columns">
                      <h2>Kitchen Sink Foundation</h2>
                      <h4 class="subheader">This page included every single Foundation element so that we can make sure things work together smoothly.</h4>
                      <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="large-12 columns">

                      <h4>Alert Boxes</h4>

                      <div data-alert class="alert-box radius">
                        This is a standard alert (div.alert-box).
                        <a href="" class="close">&times;</a>
                      </div>

                      <div data-alert class="alert-box success">
                        This is a success alert (div.alert-box.success).
                        <a href="" class="close">&times;</a>
                      </div>

                      <div data-alert class="alert-box alert round">
                        This is an alert (div.alert-box.alert.round).
                        <a href="" class="close">&times;</a>
                      </div>

                      <div data-alert class="alert-box secondary">
                        This is a secondary alert (div.alert-box.secondary).
                        <a href="" class="close">&times;</a>
                      </div>

                      <hr>

                      <h4>Block Grid</h4>

                      <ul class="small-block-grid-2 large-block-grid-4">
                        <li><img class="th" src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo1.jpg"></li>
                        <li><img class="th" src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo2.jpg"></li>
                        <li><img class="th" src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo3.jpg"></li>
                        <li><img class="th" src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo4.jpg"></li>
                      </ul>

                      <hr>

                      <h4>Breadcrumbs</h4>

                      <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Features</a></li>
                        <li class="unavailable"><a href="#">Gene Splicing</a></li>
                        <li class="current"><a href="#">Cloning</a></li>
                      </ul>

                      <hr>

                      <h4>Buttons</h4>

                      <div class="row">
                        <div class="small-6 large-6 columns">
                          <a href="#" class="tiny button">.tiny.button</a><br>
                          <a href="#" class="small button">.small.button</a><br>
                          <a href="#" class="button">.button</a><br>
                        </div>
                        <div class="small-6 large-6 columns">
                          <a href="#" class="tiny button secondary">.tiny.secondary</a><br>
                          <a href="#" class="small button success radius">.small.success.radius</a><br>
                          <a href="#" class="button alert round disabled">.round.disabled</a><br>
                        </div>
                      </div>

                      <hr>

                      <h4>Button Groups</h4>

                      <ul class="button-group">
                        <li><a href="#" class="small button">Button 1</a></li>
                        <li><a href="#" class="small button">Button 2</a></li>
                        <li><a href="#" class="small button">Button 3</a></li>
                      </ul>
                      <ul class="button-group radius">
                        <li><a href="#" class="button secondary">Button 1</a></li>
                        <li><a href="#" class="button secondary">Button 2</a></li>
                        <li><a href="#" class="button secondary">Button 3</a></li>
                        <li><a href="#" class="button secondary">Button 4</a></li>
                      </ul>
                      <ul class="button-group round even-3">
                        <li><a href="#" class="button alert">Button 1</a></li>
                        <li><a href="#" class="button alert">Button 2</a></li>
                        <li><a href="#" class="button alert">Button 3</a></li>
                      </ul>
                      <ul class="button-group round even-3">
                        <li><input type="submit" class="button success" value="Button 1"></li>
                        <li><input type="submit" class="button success" value="Button 2"></li>
                        <li><input type="submit" class="button success" value="Button 3"></li>
                      </ul>

                      <hr>

                      <h4>Dropdown Buttons</h4>
                      <ul id="drop" class="f-dropdown content" data-dropdown-content>
                        <li><a href="#">This is a link</a></li>
                        <li><a href="#">This is another</a></li>
                        <li><a href="#">Yet another</a></li>
                      </ul>

                      <a href="#" data-dropdown="drop" class="tiny button dropdown">Dropdown Button</a><br>
                      <a href="#" data-dropdown="drop" class="small secondary radius button dropdown">Dropdown Button</a><br>
                      <a href="#" data-dropdown="drop" class="button alert round dropdown">Dropdown Button</a><br>
                      <a href="#" data-dropdown="drop" class="large success button dropdown">Dropdown Button</a><br>
                      <a href="#" data-dropdown="drop" class="large button dropdown expand">Dropdown Button</a>

                      <hr>

                      <h4>Split Buttons</h4>

                      <a href="#" class="tiny button split">Split Button <span data-dropdown="drop"></span></a><br>
                      <a href="#" class="small secondary radius button split">Split Button <span data-dropdown="drop"></span></a><br>
                      <a href="#" class="button alert round split">Split Button <span data-dropdown="drop"></span></a><br>
                      <a href="#" class="large success button split">Split Button <span data-dropdown="drop"></span></a>

                      <hr>

                      <h4>Clearing</h4>

                      <div>
                        <ul class="clearing-thumbs" data-clearing>
                          <li><a class="th" href="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo1.jpg"><img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo1-th.jpg"></a></li>
                          <li><a class="th" href="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo2.jpg"><img src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo2-th.jpg"></a></li>
                          <li><a class="th" href="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo3.jpg"><img data-caption="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus." src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo3-th.jpg"></a></li>
                          <li><a class="th" href="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo4.jpg"><img src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo4-th.jpg"></a></li>
                          <li><a class="th" href="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo5.jpg"><img data-caption="Integer posuere erat a ante venenatis dapibus posuere velit aliquet." src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo5-th.jpg"></a></li>
                        </ul>
                      </div>

                      <hr>

                      <h4>Forms</h4>

                      <form>
                        <fieldset>
                          <legend>Fieldset</legend>

                          <div class="row">
                            <div class="large-12 columns">
                              <label>Input Label</label>
                              <input type="text" placeholder="large-12.columns">
                            </div>
                          </div>

                          <div class="row">
                            <div class="large-4 columns">
                              <label>Input Label</label>
                              <input type="text" placeholder="large-4.columns">
                            </div>
                            <div class="large-4 columns">
                              <label>Input Label</label>
                              <input type="text" placeholder="large-4.columns">
                            </div>
                            <div class="large-4 columns">
                              <div class="row collapse">
                                <label>Input Label</label>
                                <div class="small-9 columns">
                                  <input type="text" placeholder="small-9.columns">
                                </div>
                                <div class="small-3 columns">
                                  <span class="postfix">.com</span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="large-12 columns">
                              <label>Textarea Label</label>
                              <textarea placeholder="small-12.columns"></textarea>
                            </div>
                          </div>

                        </fieldset>
                      </form>

                      <hr>

                      <h4>Custom Forms</h4>

                      <form class="custom">
                        <div class="row">
                          <div class="large-4 columns">
                            <label for="radio1"><input name="radio1" type="radio" id="radio1" style="display:none;" CHECKED><span class="custom radio checked"></span> Radio Button 1</label>
                            <label for="radio1"><input name="radio1" type="radio" id="radio1" style="display:none;"><span class="custom radio"></span> Radio Button 2</label>
                            <label for="radio1"><input name="radio1" type="radio" id="radio1" disabled style="display:none;"><span class="custom radio"></span> Radio Button 3</label>
                          </div>
                          <div class="large-4 columns">
                            <label for="checkbox1"><input type="checkbox" id="checkbox1" style="display: none;"><span class="custom checkbox"></span> Label for Checkbox</label>
                            <label for="checkbox2"><input type="checkbox" id="checkbox2" CHECKED style="display: none;"><span class="custom checkbox checked"></span> Label for Checkbox</label>
                            <label for="checkbox3"><input type="checkbox" CHECKED id="checkbox3" style="display: none;"><span class="custom checkbox checked"></span> Label for Checkbox</label>
                          </div>
                          <div class="large-4 columns">
                            <label for="customDropdown1">Medium Example</label>
                            <select id="customDropdown1" class="medium">
                              <option DISABLED>This is a dropdown</option>
                              <option>This is another option</option>
                              <option>This is another option too</option>
                              <option>Look, a third option</option>
                            </select>
                          </div>
                        </div>
                      </form>

                      <hr>

                      <h4>Dropdowns</h4>

                      <a href="#" class="button" data-dropdown="tinyDrop">Link Dropdown &raquo;</a>
                      <a href="#" class="button" data-dropdown="contentDrop">Content Dropdown &raquo;</a>
                      <!-- Dropdowns -->
                      <ul id="tinyDrop" class="f-dropdown" data-dropdown-content>
                        <li><a href="#">This is a link</a></li>
                        <li><a href="#">This is another</a></li>
                        <li><a href="#">Yet another</a></li>
                      </ul>
                      <div id="contentDrop" class="f-dropdown content medium" data-dropdown-content>
                        <h4>Title</h4>
                        <p>Some text that people will think is awesome! Some text that people will think is awesome! Some text that people will think is awesome!</p>
                        <img src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo1.jpg">
                        <p>More test.</p>
                        <a href="#" class="button">Button</a>
                      </div>

                      <hr>

                      <h4>Flex Video</h4>

                      <div class="flex-video">
                        <iframe width="420" height="315" src="http://www.youtube.com/embed/0_EW8aNgKlA" frameborder="0" allowfullscreen></iframe>
                      </div>

                      <hr>

                      <h4>Inline Lists</h4>

                      <ul class="inline-list">
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                      </ul>

                      <hr>

                      <h4>Joyride</h4>

                      <a id="start-jr" class="secondary button">Start Joyride</a>
                      <h5 id="numero1" class="so-awesome">Build Joyride with HTML</h5>
                      <p id="numero2" class="so-awesome">Stop Number 2 for You!</p>

                      <hr>

                      <h4>Keystroke</h4>

                      <p>To make something pretty, press and hold <kbd>cmd + alt + shift + w + a + !</kbd></p>

                      <hr>

                      <h4>Labels</h4>

                      <p>
                        <span class="label">Regular Label</span><br>
                        <span class="radius secondary label">Radius Secondary Label</span><br>
                        <span class="round alert label">Round Alert Label</span><br>
                        <span class="success label">Success Label</span><br>
                      </p>

                      <hr>

                      <h4>Magellan</h4>

                      <div data-magellan-expedition="fixed">
                        <dl class="sub-nav">
                          <dd data-magellan-arrival="build"><a href="#build">Build with HTML</a></dd>
                          <dd data-magellan-arrival="js"><a href="#js">Using Javascript</a></dd>
                        </dl>
                      </div>

                      <h5 data-magellan-destination="build">Build With Predefined HTML Structure</h5>
                      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper.</p>
                      <h5 data-magellan-destination="js">Awesome JS Goodness</h5>
                      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper.</p>

                      <hr>

                      <h4>Orbit</h4>

                      <div class="row">
                        <div class="large-6 columns">
                          <ul id="featured1" data-orbit data-options="timer_speed:5000;">
                            <li>
                              <img src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo1.jpg" />
                              <div class="orbit-caption">
                                Caption One. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                              </div>
                            </li>
                            <li>
                              <img src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo2.jpg" />
                              <div class="orbit-caption">
                                Caption Two. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                              </div>
                            </li>
                            <li>
                              <img src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo3.jpg" />
                              <div class="orbit-caption">
                                Caption Three. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <hr>

                      <h4>Pagination</h4>

                      <ul class="pagination">
                        <li class="arrow unavailable"><a href="">&laquo;</a></li>
                        <li class="current"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li class="unavailable"><a href="">&hellip;</a></li>
                        <li><a href="">12</a></li>
                        <li><a href="">13</a></li>
                        <li class="arrow"><a href="">&raquo;</a></li>
                      </ul>

                      <hr>

                      <h4>Panels</h4>

                      <div class="row">
                        <div class="large-6 columns">
                          <div class="panel">
                            <h5>This is a regular panel.</h5>
                            <p>It has an easy to override visual style, and is appropriately subdued.</p>
                          </div>
                        </div>
                        <div class="large-6 columns">
                          <div class="panel callout radius">
                            <h5>This is a callout panel.</h5>
                            <p>It's a little ostentatious, but useful for important content.</p>
                          </div>
                        </div>
                      </div>

                      <hr>

                      <h4>Pricing Tables</h4>

                      <div class="row">
                        <div class="large-4 columns">
                          <ul class="pricing-table">
                            <li class="title">Standard</li>
                            <li class="price">$99.99</li>
                            <li class="description">An awesome description</li>
                            <li class="bullet-item">1 Database</li>
                            <li class="bullet-item">5GB Storage</li>
                            <li class="bullet-item">20 Users</li>
                            <li class="cta-button"><a class="button" href="#">Buy Now</a></li>
                          </ul>
                        </div>
                      </div>

                      <hr>

                      <h4>Progress Bars</h4>

                      <div class="progress large-6"><span class="meter" style="width: 40%"></span></div>
                      <div class="radius progress success large-8"><span class="meter" style="width: 80%"></span></div>
                      <div class="nice round progress alert large-10"><span class="meter" style="width: 30%"></span></div>
                      <div class="nice secondary progress"><span class="meter" style="width: 50%"></span></div>

                      <hr>

                      <h4>Reveal</h4>

                      <a href="#" data-reveal-id="firstModal" class="radius button">Example Modal&hellip;</a>
                      <a href="#" data-reveal-id="videoModal" class="radius button">Example Modal w/Video&hellip;</a>

                      <hr>

                      <h4>Section</h4>

                      <div class="row">
                        <div class="large-3 columns">
                          <div class="section-container vertical-nav" data-section="vertical-nav">
                            <section class="section">
                              <p class="title"><a href="#">Section 1</a></p>
                              <div class="content">
                                <ul class="side-nav">
                                  <li><a href="#">Link 1</a></li>
                                  <li><a href="#">Link 2</a></li>
                                  <li><a href="#">Link 3</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Link 1</a></li>
                                </ul>
                              </div>
                            </section>
                            <section class="section">
                              <p class="title"><a href="#">Section 2</a></p>
                              <div class="content">
                                <ul class="side-nav">
                                  <li><a href="#">Link 1</a></li>
                                  <li><a href="#">Link 2</a></li>
                                  <li><a href="#">Link 3</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Link 1</a></li>
                                </ul>
                              </div>
                            </section>
                          </div>
                        </div>
                        <div class="large-8 columns">
                          <div class="section-container horizontal-nav" data-section="horizontal-nav">
                            <section class="section">
                              <p class="title"><a href="#">Section 1</a></p>
                              <div class="content">
                                <ul class="side-nav">
                                  <li><a href="#">Link 1</a></li>
                                  <li><a href="#">Link 2</a></li>
                                  <li><a href="#">Link 3</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Link 1</a></li>
                                </ul>
                              </div>
                            </section>
                            <section class="section">
                              <p class="title"><a href="#">Section 2</a></p>
                              <div class="content">
                                <ul class="side-nav">
                                  <li><a href="#">Link 1</a></li>
                                  <li><a href="#">Link 2</a></li>
                                  <li><a href="#">Link 3</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Link 1</a></li>
                                </ul>
                              </div>
                            </section>
                          </div>
                          <div class="section-container auto" data-section data-options="deep_linking: true;">
                            <section class="section">
                              <p class="title"><a href="#panel1">Section 1</a></p>
                              <div class="content" data-slug="panel1">
                                <p>Section 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                            </section>
                            <section class="section">
                              <p class="title"><a href="#panel2">Section 2</a></p>
                              <div class="content" data-slug="panel2">
                                <p>Section 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                            </section>
                            <div class="section">
                              <p class="title"><a href="#panel3">Section 3</a></p>
                              <div class="content" data-slug="panel3">
                                <form>
                                  <div class="row collapse">
                                    <div class="large-2 columns">
                                      <label class="inline">Your Name</label>
                                    </div>
                                    <div class="large-10 columns">
                                      <input type="text" id="yourName" placeholder="Jane Smith">
                                    </div>
                                  </div>
                                  <div class="row collapse">
                                    <div class="large-2 columns">
                                      <label class="inline"> Your Email</label>
                                    </div>
                                    <div class="large-10 columns">
                                      <input type="text" id="yourEmail" placeholder="jane@smithco.com">
                                    </div>
                                  </div>
                                  <label>What's up?</label>
                                  <textarea rows="4"></textarea>
                                  <button type="submit" class="radius button">Submit</button>
                                </form>
                              </div>
                            </div>
                          </div>
                          <div class="section-container accordion" data-section="accordion">
                            <section class="section">
                              <p class="title"><a href="#panel1">Section 1</a></p>
                              <div class="content" data-slug="panel1">
                                <p>Section 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                            </section>
                            <section class="section">
                              <p class="title"><a href="#panel2">Section 2</a></p>
                              <div class="content" data-slug="panel2">
                                <p>Section 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                            </section>
                            <section class="section">
                              <p class="title"><a href="#panel3">Section 3</a></p>
                              <div class="content" data-slug="panel3">
                                <p>Section 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                            </section>
                          </div>
                          <div class="section-container tabs" data-section="tabs">
                            <section class="section">
                              <p class="title"><a href="#panel1">Section 1</a></p>
                              <div class="content" data-slug="panel1">
                                <p>Section 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                            </section>
                            <section class="section">
                              <p class="title"><a href="#panel2">Section 2</a></p>
                              <div class="content" data-slug="panel2">
                                <p>Section 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                            </section>
                            <section class="section">
                              <p class="title"><a href="#panel3">Section 3</a></p>
                              <div class="content" data-slug="panel3">
                                <p>Section 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                            </section>
                          </div>
                        </div>
                      </div>

                      <hr>

                      <h4>Side Nav</h4>

                      <div class="row">
                        <div class="large-4 columns end">
                          <ul class="side-nav">
                            <li class="active"><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Link 3</a></li>
                            <li><a href="#">Link 4</a></li>
                          </ul>
                        </div>
                      </div>

                      <hr>

                      <h4>Sub Nav</h4>

                      <dl class="sub-nav">
                        <dt>Filter:</dt>
                        <dd class="active"><a href="#">All</a></dd>
                        <dd><a href="#">Active</a></dd>
                        <dd><a href="#">Pending</a></dd>
                        <dd><a href="#">Suspended</a></dd>
                      </dl>

                      <hr>

                      <h4>Switch</h4>

                      <div class="small-2 switch tiny">
                        <input id="a" name="switch-a" type="radio" checked>
                        <label for="a" onclick="">Off</label>

                        <input id="a1" name="switch-a" type="radio">
                        <label for="a1" onclick="">On</label>

                        <span></span>
                      </div>

                      <div class="small-3 switch small">
                        <input id="b" name="switch-b" type="radio" checked>
                        <label for="b" onclick="">Off</label>

                        <input id="b1" name="switch-b" type="radio">
                        <label for="b1" onclick="">On</label>

                        <span></span>
                      </div>

                      <div class="small-4 switch radius">
                        <input id="c" name="switch-c" type="radio" checked>
                        <label for="c" onclick="">Off</label>

                        <input id="c1" name="switch-c" type="radio">
                        <label for="c1" onclick="">On</label>

                        <span></span>
                      </div>

                      <div class="small-6 switch large round">
                        <input id="d" name="switch-d" type="radio" checked>
                        <label for="d" onclick="">Off</label>

                        <input id="d1" name="switch-d" type="radio">
                        <label for="d1" onclick="">On</label>

                        <span></span>
                      </div>

                      <hr>

                      <h4>Tables</h4>

                      <table>
                        <thead>
                          <tr>
                            <th width="200">Table Header</th>
                            <th>Table Header</th>
                            <th width="150">Table Header</th>
                            <th width="150">Table Header</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Content Goes Here</td>
                            <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
                            <td>Content Goes Here</td>
                            <td>Content Goes Here</td>
                          </tr>
                          <tr>
                            <td>Content Goes Here</td>
                            <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
                            <td>Content Goes Here</td>
                            <td>Content Goes Here</td>
                          </tr>
                          <tr>
                            <td>Content Goes Here</td>
                            <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
                            <td>Content Goes Here</td>
                            <td>Content Goes Here</td>
                          </tr>
                        </tbody>
                      </table>

                      <hr>

                      <h4>Thumbnails</h4>

                      <p><a class="th" href="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo1.jpg"><img src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo1-th.jpg"></a></p>
                      <img class="th" src="<?php echo RTP_IMG_FOLDER_URL; ?>/demos/demo2-th.jpg">

                      <hr>

                      <h4>Tooltips</h4>

                      <p>The tooltips can be positioned on the <span data-tooltip class="has-tip" data-width="210" title="I'm on bottom and the default position.">"tip-bottom"</span>, which is the default position, <span data-tooltip class="has-tip tip-top noradius" data-width="210" title="I'm on the top and I'm not rounded!">"tip-top" (hehe)</span>, <span data-tooltip="left" class="has-tip tip-left" data-width="90" title="I'm on the left!">"tip-left"</span>, or <span data-tooltip="right" class="has-tip tip-right" data-width="120" title="I'm on the right!">"tip-right"</span> of the target element by adding the appropriate class to them. You can even add your own custom class to style each tip differently. On a small device, the tooltips are full width and bottom aligned.</p>

                      <hr>

                      <h4>Top Bar</h4>

                      <nav class="top-bar">
                        <ul class="title-area">
                          <!-- Title Area -->
                          <li class="name">
                            <h1><a href="/">Top Bar</a></h1>
                          </li>
                          <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                        </ul>

                        <section class="top-bar-section">
                          <ul class="left">
                            <li class="divider"></li>
                            <li class="has-dropdown"><a href="#">Item 1</a>

                              <ul class="dropdown">
                                <li><label>Level One</label></li>
                                <li><a href="#">Sub-item 1</a></li>
                                <li><a href="#">Sub-item 2</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Sub-item 3</a></li>
                                <li class="has-dropdown"><a href="#">Sub-item 4</a>

                                  <ul class="dropdown">
                                    <li><label>Level Two</label></li>
                                    <li class="has-dropdown"><a href="#">Sub-item 1</a>

                                      <ul class="dropdown">
                                        <li><label>Level Three</label></li>
                                        <li class="has-dropdown"><a href="#">Sub-item 1</a>

                                          <ul class="dropdown">
                                            <li><label>Level Four</label></li>
                                            <li><a href="#">Sub-item 1</a></li>
                                          </ul>
                                        </li>
                                        <li><a href="#">Sub-item 2</a></li>
                                        <li><a href="#">Sub-item 3</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Sub-item 4</a></li>
                                      </ul>
                                    </li>
                                    <li><a href="#">Sub-item 2</a></li>
                                    <li><a href="#">Sub-item 3</a></li>
                                    <li><a href="#">Sub-item 4</a>
                                  </ul>
                                </li>
                                <li><a href="#">Sub-item 5</a></li>
                              </ul>
                            </li>
                            <li class="divider"></li>
                          </ul>
                          <!-- Right Nav Section -->
                          <ul class="right">
                            <li class="divider hide-for-small"></li>
                            <li><a href="#">Item 2</a></li>
                          </ul>
                        </section>
                      </nav>

                      <hr>

                      <h4>Type</h4>

                      <h1>h1. This is a very large header.</h1>
                      <h2>h2. This is a large header.</h2>
                      <h3>h3. This is a medium header.</h3>
                      <h4>h4. This is a moderate header.</h4>
                      <h5>h5. This is a small header. h1.</h5>
                      <h6>h6. This is a tiny header. h1.</h6>

                      <br>

                      <h1 class="subheader">h1.subheader</h1>
                      <h2 class="subheader">h2.subheader</h2>
                      <h3 class="subheader">h3.subheader</h3>
                      <h4 class="subheader">h4.subheader</h4>
                      <h5 class="subheader">h5.subheader</h5>
                      <h6 class="subheader">h6.subheader</h6>

                      <br>

                      <ul class="disc">
                        <li>List item with a much longer description or more content.</li>
                        <li>List item</li>
                        <li>List item
                          <ul>
                            <li>Nested List Item</li>
                            <li>Nested List Item</li>
                            <li>Nested List Item</li>
                          </ul>
                        </li>
                        <li>List item</li>
                        <li>List item</li>
                        <li>List item</li>
                      </ul>

                      <!-- Ordered lists are great for lists that need order, duh -->
                      <ol>
                        <li>List Item 1</li>
                        <li>List Item 2</li>
                        <li>List Item 3</li>
                      </ol>

                      <!-- Definition lists are great for small block of copy that describe the header -->
                      <dl>
                        <dt>Definition List</dt>
                        <dd>Definition Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam id dolor id nibh ultricies vehicula ut id elit.</dd>
                      </dl>

                      <br>

                      <blockquote>I do not fear computers. I fear the lack of them. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur.<cite>Isaac Asimov</cite></blockquote>

                      <br>

                      <ul class="vcard">
                        <li class="fn">Gaius Baltar</li>
                        <li class="street-address">123 Colonial Ave.</li>
                        <li class="locality">Caprica City</li>
                        <li><span class="state">Caprica</span>, <span class="zip">12345</span></li>
                        <li class="email"><a href="#">g.baltar@cmail.com</a></li>
                      </ul>

                      <hr>

                      <h4>Visibility Classes</h4>

                      <h5>Screen Size Visibility Control (Show)</h5>
                      <p>The following text should describe the screen size you're using:</p>
                      <p class="panel">
                        <strong class="show-for-small">You are on a small screen.</strong>
                        <strong class="show-for-medium">You are on a medium screen.</strong>
                        <strong class="show-for-medium-up">You are on a medium, large or xlarge screen.</strong>
                        <strong class="show-for-medium-down">You are on a medium or small screen.</strong>
                        <strong class="show-for-large">You are on a large screen.</strong>
                        <strong class="show-for-large-up">You are on a large or xlarge screen.</strong>
                        <strong class="show-for-large-down">You are on a large, medium or small screen.</strong>
                        <strong class="show-for-xlarge">You are on a xlarge screen.</strong>
                      </p>

                      <h5>Screen Size Visibility Control (Hide)</h5>
                      <p>The following text should describe the screen size you aren't using:</p>
                      <p class="panel">
                        <strong class="hide-for-small">You are <em>not</em> on a small screen.</strong>
                        <strong class="hide-for-medium">You are <em>not</em> on a medium screen.</strong>
                        <strong class="hide-for-medium-up">You are <em>not</em> on a medium, large or xlarge screen.</strong>
                        <strong class="hide-for-medium-down">You are <em>not</em> on a medium or small screen.</strong>
                        <strong class="hide-for-large">You are <em>not</em> on a large screen.</strong>
                        <strong class="hide-for-large-up">You are <em>not</em> on a large or xlarge screen.</strong>
                        <strong class="hide-for-large-down">You are <em>not</em> on a large, medium or small screen.</strong>
                        <strong class="hide-for-xlarge">You are <em>not</em> on a xlarge screen.</strong>
                      </p>

                      <h5>Orientation Detection</h5>
                      <p>The following text should describe the device orientation you're using:</p>
                      <p class="panel">
                        <strong class="show-for-landscape">You are in landscape orientation.</strong>
                        <strong class="show-for-portrait">You are in portrait orientation.</strong>
                      </p>

                      <h5>Touch Detection</h5>
                      <p>The following text should describe if you're using a touch device:</p>
                      <p class="panel">
                        <strong class="show-for-touch">You are on a touch-enabled device.</strong>
                        <strong class="hide-for-touch">You are not on a touch-enabled device.</strong>
                      </p>

                    </div>
                </div>

            </div>

        </div>

        <!-- Joyride -->
        <ol class="joyride-list" data-joyride>
            <li data-id="numero1" data-class="custom so-awesome" data-text="Next">
              <h4>Stop #1</h4>
              <p>You can control all the details for you tour stop. Any valid HTML will work inside of Joyride.</p>
            </li>
            <li data-id="numero2" data-button="Next">
              <h4>Stop #2</h4>
              <p>Get the details right by styling Joyride with a custom stylesheet!</p>
            </li>
            <li data-button="Next">
              <h4>Stop #3</h4>
              <p>It works as a modal too!</p>
            </li>
        </ol>

        <?php rtp_hook_end_content(); ?>
    </section><!-- #content -->

<?php get_footer(); ?>