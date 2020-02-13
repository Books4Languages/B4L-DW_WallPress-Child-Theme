# Plugin structure
```
themes/b4l-dw_wallpress-child-themes                               # → Plugin root
├── lib                                                            # → Lib folder                                        
│   ├── walpress-child-admin-bar.php                               # → Wallpress child admin bar file php                  
│   ├── walpress-child-custom-taxonomies.php                       # → Wallpress child custom taxonomies file php
│   ├── walpress-child-custom-widgets-taxonomies.php               # → Wallpress child custom widgets taxonomies file php
│   ├── wallpress-child-custom-widgets.php                         # → Wallpress child custom widgets file php
│   └── wallpress-child-login                                      # → Wallpress child login file php
├── symbionts                                                      # → Symbionts folder
│   ├── featured-audio                                             # → Featured audio folder
│   │   ├── featured-audio-admin.js                                # → Featured audio admin file javascript
│   │   ├── featured-audio-playlist-widget.php                     # → Featured audio playlist widget file php
│   │   ├── featured-audio-recent-playlist-widget.php              # → Featured audio recent playlist widget file php
│   │   ├── featured-audio.php                                     # → Featured audio file php
│   │   ├── post-meta.php                                          # → Post meta file php
│   │   └── readme.txt                                             # → Readme file txt
│   └── search-filter-pro                                          # → Search filter pro folder
│       ├── admin                                                  # → Admin folder
│       │   ├── assets                                             # → Assets folder
│       │   │   ├── css                                            # → Css folder
│       │   │   │   ├── admin.css                                  # → Admin file css
│       │   │   │   ├── hint.min.css                               # → Hint min file css
│       │   │   │   ├── index.php                                  # → Empty index file php
│       │   │   │   └── jquery.qtip.min.css                        # → Jquery qtip min file css
│       │   │   ├── img                                            # → Img folder
│       │   │   │   ├── icon.png                                   # → Icon file png
│       │   │   │   └── move-ico.svg                               # → Move ico file svg
│       │   │   └── js                                             # → Js folder
│       │   │       ├── admin-posts.js                             # → Admin posts file js
│       │   │       ├── admin.js                                   # → Admin file js
│       │   │       ├── index.php                                  # → Empty index file php
│       │   │       └── jquery.qtip.min.js                         # → Jquery qtip min file js
│       │   ├── includes                                           # → Includes folder
│       │   │   ├── class-search-filter-admin-notices.php          # → Class search filter admin notices file php
│       │   │   ├── class-search-filter-post-data-validation.php   # → Class search filter post data validation file php
│       │   │   ├── class-search-filter-posts-admin.php            # → Class search filter posts admin file php
│       │   │   ├── class-search-filter-widgets-admin.php          # → Class search filter widgets admin file php
│       │   │   ├── EDD_SL_Plugin_Updater.php                      # → Edd sl plugin updater file php
│       │   │   └── index.php                                      # → Empty index file php
│       │   ├── views                                              # → Views folder
│       │   │   ├── fields                                         # → Fields folder
│       │   │   │   ├── post-meta                                  # → Post meta folder
│       │   │   │   │   ├── choice.php                             # → Choiche file php
│       │   │   │   │   ├── date.php                               # → Date file php
│       │   │   │   │   └── number.php                             # → Number file php
│       │   │   │   ├── author.php                                 # → Author file php
│       │   │   │   ├── category.php                               # → Category file php
│       │   │   │   ├── meta-option.php                            # → Meta option file php
│       │   │   │   ├── post-date.php                              # → Post date file php
│       │   │   │   ├── post-meta.php                              # → Post meta file php
│       │   │   │   ├── post-type.php                              # → Post type file php
│       │   │   │   ├── posts-per-page.php                         # → Post per page file php
│       │   │   │   ├── reset.php                                  # → Reset file php
│       │   │   │   ├── search.php                                 # → Search file php
│       │   │   │   ├── sort-order-option.php                      # → Sort order option file php
│       │   │   │   ├── sort.order.php                             # → Sort order file php
│       │   │   │   ├── submit.php                                 # → Submit file php
│       │   │   │   ├── tag.php                                    # → Tag file php
│       │   │   │   └── taxonomy.php                               # → Taxonomy file php
│       │   │   ├── settings-metabox                               # → Settings metabox folder
│       │   │   │   └── meta-option.php                            # → Meta option file php
│       │   │   ├── admin-available-fields-metabox.php             # → Admin available fields metabox file php
│       │   │   ├── admin-cache.php                                # → Admin cache file php
│       │   │   ├── admin-help.php                                 # → Admin help file php
│       │   │   ├── admin-layout.php                               # → Admin layout file php
│       │   │   ├── admin-license-settings.php                     # → Admin license settings file php
│       │   │   ├── admin-search-form-cache-metabox.php            # → Admin search form cache metabox file php
│       │   │   ├── admin-search-form-metabox.php                  # → Admin search form metabox file php
│       │   │   ├── admin-search-form-settings-metabox.php         # → Admin search form settings metabox file php
│       │   │   ├── admin-search-form-shortcode-metabox.php        # → Admin search form shortcode
│       │   │   ├── admin-settings.php                             # → Admin settings file php
│       │   │   ├── admin-system-status.php                        # → Admin system status file php
│       │   │   ├── admin-widgets.php                              # → Admin widgets file php
│       │   │   ├── admin-woocommerce-fields-metabox.php           # → Admin woocommerce fields metabox file php
│       │   │   ├── admin.php                                      # → Admin file php
│       │   │   └── index.php                                      # → Empty index file php
│       │   └── class-search-filter-admin.php                      # → Class search filter admin file php
│       ├── includes                                               # → Includes folder
│       │   ├── class-search-filter-activator.php                  # → Class search filter activator file php
│       │   ├── class-search-filter-deactivator.php                # → Class search filter deactivator file php
│       │   ├── class-search-filter-helper.php                     # → Class search filter helper file php
│       │   ├── class-search-filter-post-cache.php                 # → Class search filter post cache file php
│       │   ├── class-search-filter-register-widget.php            # → Class search filter register widget file php
│       │   ├── class-search-filter-shared.php                     # → Class search filter shared file php
│       │   ├── class-search-filter-third-party.php                # → Class search filter third party file php
│       │   ├── class-search-filter-wp-cache.php                   # → Class search filter wp cache file php
│       │   ├── class-search-filter-wp-data.php                    # → Class search filter wp data file php
│       │   └── index.php                                          # → Empty index file php
│       ├── languages                                              # → Languages file php
│       │   ├── index.php                                          # → Empty index file php
│       │   └── search-filter.pot                                  # → Search filter file pot
│       ├── public                                                 # → public folder
│       ├── templates                                              # → templates folder
│       ├── index.php                                              # → Empty index file php
│       ├── README.txt                                             # → Readme file txt
│       ├── search-filter-pro.php                                  # → Search filter pro file php
│       └── unistall.php                                           # → Unistall file php
├── category-culture.php                                           # → Category culture file php
├── category-grammar.php                                           # → Category grammar file php
├── category-orthography.php                                       # → Category orthography file php
├── category-vocabulary.php                                        # → Category vocabulary file php
├── content.php                                                    # → Content file php
├── dw-wallpress.1.1.7.zip                                         # → Dw wallpress 1.1.7 zip folder
├── FOLDER-STRUCTURE.md                                            # → Folder structure file md
├── functions.php                                                  # → Functions file php
├── LICENSE.md                                                     # → Licence file md
├── license.txt                                                    # → License file txt
├── metabox.php                                                    # → Metabox file php
├── README.md                                                      # → Readme file md
├── readme.txt                                                     # → Readme file txt
├── search.php                                                     # → Search file php
├── sidebar-a1.php                                                 # → Sidebar a1 file php
├── sidebar-a2.php                                                 # → Sidebar a2 file php
├── sidebar-b1.php                                                 # → Sidebar b1 file php
├── sidebar-b2.php                                                 # → Sidebar b2 file php
├── sidebar-c1.php                                                 # → Sidebar c1 file php
├── sidebar-c2.php                                                 # → Sidebar c2 file php
├── sidebar-culture.php                                            # → Sidebar culture file php
├── sidebar-grammar.php                                            # → Sidebar grammar file php
├── sidebar-orthography.php                                        # → Sidebar orthography file php
├── sidebar-vocabulary.php                                         # → Sidebar vocabulary file php
├── style.css                                                      # → Style file css
├── tag-a1.php                                                     # → Tag a1 file php
├── tag-a2.php                                                     # → Tag a2 file php
├── tag-b1.php                                                     # → Tag b1 file php
├── tag-b2.php                                                     # → Tag b2 file php
├── tag-c1.php                                                     # → Tag c1 file php
└── tag-c2.php                                                     # → Tag c2 file php
