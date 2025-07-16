<?php

namespace Emkcloud\ObsidianUI\Blade;

class FileContent
{
    public static function handle($expression): string
    {
        return "<?php 

            \$filename = dirname(\$obsidianCurrentViewPath).'/'.{$expression};

            if (file_exists(\$filename))
            {
                echo file_get_contents(\$filename);
            }
        ?>";
    }
}
