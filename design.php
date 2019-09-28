<!doctype html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo( "name" ); ?></title>
    <?php wp_head();?>
</head>
    
<body>
    <header>
        <div class="mira-mira"><a href="https://mimi-min.com" title="Art copyright &copy; Mimi Min 2019" target="_blank"></a></div>
        
        <p class="furi">みら みら</p>
        <h1 class="title-en"><a href="#">&#9499;Mira&#9556;Mira&#9495;</a></h1>
        <p class="desc-jp">はロリ声で英語と日本語での声優・歌い手をしております。</p>
        <p><?php echo get_bloginfo( 'description' ); ?></p>
        
        
        <nav class="header-nav">
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                
                <li class="nav-item-has-children">
                    <input id="check-#" type="checkbox" />
                    
                    <div class="sub-nav-wrapper">
                            <label for="check-#"> Dropdown Label 1</label>
                            <ul class="sub-menu">
                                <li>Link 1</li>
                                <li>Link 2</li>
                            </ul>
                    </div>
                </li>
                
                <li class="nav-item-has-children">
                    <input id="check-#" type="checkbox" />
                    
                    <div class="sub-nav-wrapper">
                            <label for="check-#"> Dropdown Label 2 </label>
                            <ul class="sub-menu">
                                <li>Link 1</li>
                                <li>Link 2</li>
                            </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
        
    <div class="main-wrapper">
        <main>
            <h2>A Title</h2>
                <p>This is a paragraph, it has a <a href="#">link</a> in it.</p>
                <blockquote>This is a quote.</blockquote>
        
        </main>
        
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                
                    <li class="nav-item-has-children">
                        <input id="check-#" type="checkbox" />
                    
                        <div class="sub-nav-wrapper">
                            <label for="check-#"> Dropdown Label 1</label>
                            <ul class="sub-menu">
                                <li>Link 1</li>
                                <li>Link 2</li>
                            </ul>
                        </div>
                    </li>
                
                    <li class="nav-item-has-children">
                        <input id="check-#" type="checkbox" />
                    
                        <div class="sub-nav-wrapper">
                            <label for="check-#"> Dropdown Label 2 </label>
                            <ul class="sub-menu">
                                <li>Link 1</li>
                                <li>Link 2</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
                
            <div class="sidebar-widget">
                <h3>This is a widget title</h3>
                <p>This is widget content, I guess.</p>
            </div>
        </div><!--/.sidebar-->
    </div><!--/.main-wrapper-->

        
    <footer>
        <p>Copyright <!--<i class="far fa-copyright fa-sm"></i>--> Mira<!--<i class="far fa-heart fa-xs"></i>-->Mira <!--<?php echo date("Y");?>-->. Art <!--<i class="far fa-copyright fa-sm"></i>--> <a href="https://www.mimi-min.com">Mimi Min</a>.</p>
    </footer>
</body>
    
</html>