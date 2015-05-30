; automated_newsletters make file for d.o. usage
core = "7.x"
api = "2"

; +++++ Modules +++++

projects[admin_menu][version] = "3.0-rc5"
projects[admin_menu][subdir] = "contrib"

projects[profiler_builder][version] = "1.2"
projects[profiler_builder][subdir] = "contrib"

projects[features][version] = "2.5"
projects[features][subdir] = "contrib"

projects[entity][version] = "1.6"
projects[entity][subdir] = "contrib"

projects[paragraphs][version] = "1.0-beta6"
projects[paragraphs][subdir] = "contrib"

projects[ckeditor][version] = "1.16"
projects[ckeditor][subdir] = "contrib"

; +++++ TODO modules without versions +++++

projects[newsletter][version] = "" ; TODO add version
projects[newsletter][subdir] = "contrib"

