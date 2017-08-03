<?php  return array (
  'config' => 
  array (
    'allow_tags_in_post' => '1',
    'modRequest.class' => 'modManagerRequest',
  ),
  'aliasMap' => 
  array (
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'msOnChangeOrderStatus' => 
    array (
      17 => '17',
    ),
    'OnBeforeSaveWebPageCache' => 
    array (
      8 => '8',
    ),
    'OnCacheUpdate' => 
    array (
      11 => '11',
    ),
    'OnChunkFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnDocFormPrerender' => 
    array (
      1 => '1',
      5 => '5',
    ),
    'OnDocFormRender' => 
    array (
      14 => '14',
    ),
    'OnDocFormSave' => 
    array (
      9 => '9',
      14 => '14',
      18 => '18',
    ),
    'OnDocPublished' => 
    array (
      9 => '9',
    ),
    'OnDocUnPublished' => 
    array (
      9 => '9',
    ),
    'OnEmptyTrash' => 
    array (
      18 => '18',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnFileEditFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnFileManagerUpload' => 
    array (
      7 => '7',
    ),
    'OnHandleRequest' => 
    array (
      17 => '17',
    ),
    'OnLoadWebDocument' => 
    array (
      18 => '18',
      14 => '14',
      17 => '17',
    ),
    'OnManagerPageBeforeRender' => 
    array (
      1 => '1',
      3 => '3',
      2 => '2',
    ),
    'OnManagerPageInit' => 
    array (
      12 => '12',
    ),
    'OnMODXInit' => 
    array (
      8 => '8',
      17 => '17',
    ),
    'OnPageNotFound' => 
    array (
      18 => '18',
    ),
    'OnPluginFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnResourceDelete' => 
    array (
      9 => '9',
    ),
    'OnResourceDuplicate' => 
    array (
      14 => '14',
      9 => '9',
    ),
    'OnResourceUndelete' => 
    array (
      9 => '9',
    ),
    'OnRichTextBrowserInit' => 
    array (
      2 => '2',
    ),
    'OnRichTextEditorInit' => 
    array (
      2 => '2',
    ),
    'OnRichTextEditorRegister' => 
    array (
      1 => '1',
      2 => '2',
    ),
    'OnSiteRefresh' => 
    array (
      18 => '18',
      15 => '15',
      8 => '8',
    ),
    'OnSnipFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnTempFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnTVInputPropertiesList' => 
    array (
      5 => '5',
    ),
    'OnTVInputRenderList' => 
    array (
      5 => '5',
    ),
    'OnUpdaterCoreRefresh' => 
    array (
      13 => '13',
    ),
    'OnUpdaterNotify' => 
    array (
      10 => '10',
    ),
    'OnUpdaterPackagesRefresh' => 
    array (
      13 => '13',
    ),
    'OnUserSave' => 
    array (
      17 => '17',
      18 => '18',
    ),
    'OnWebPageComplete' => 
    array (
      18 => '18',
    ),
    'OnWebPageInit' => 
    array (
      12 => '12',
      17 => '17',
    ),
    'OnWebPagePrerender' => 
    array (
      15 => '15',
      18 => '18',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = \'text/html\';
        }
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_default\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        switch (true) {
            case $mimeType == \'text/html\' && $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $mimeType == \'text/html\' && $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
        }

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'CKEditor',
      'description' => 'CKEditor WYSIWYG editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'ckeditor/elements/plugins/ckeditor.plugin.php',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'FormIt',
      'description' => '',
      'editor_type' => '0',
      'category' => '2',
      'cache_type' => '0',
      'plugincode' => '/**
 * FormIt
 *
 * Copyright 2009-2017 by Sterc <modx@sterc.nl>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt plugin
 *
 * @package formit
 */

$formit = $modx->getService(
    \'formit\',
    \'FormIt\',
    $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\').\'components/formit/\') .\'model/formit/\',
    array()
);

if (!($formit instanceof FormIt)) {
    return;
}

switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        // If migration status is false, show migrate alert message bar in manager
        if (method_exists(\'FormIt\',\'encryptionMigrationStatus\')) {
            if (!$formit->encryptionMigrationStatus()) {
                $modx->lexicon->load(\'formit:mgr\');
                $properties = array(\'message\' => $modx->lexicon(\'formit.migrate_alert\'));
                $chunk = $formit->_getTplChunk(\'migrate/alert\');
                if ($chunk) {
                    $modx->regClientStartupHTMLBlock($chunk->process($properties));
                    $modx->regClientCSS($formit->config[\'cssUrl\'] . \'migrate.css\');
                }
            }
        }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'MIGX',
      'description' => '',
      'editor_type' => '0',
      'category' => '4',
      'cache_type' => '0',
      'plugincode' => '$corePath = $modx->getOption(\'migx.core_path\',null,$modx->getOption(\'core_path\').\'components/migx/\');
$assetsUrl = $modx->getOption(\'migx.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/migx/\');
switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tv/input/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/inputoptions/\');
        break;

        case \'OnDocFormPrerender\':
        $modx->controller->addCss($assetsUrl.\'css/mgr.css\');
        break; 
 
    /*          
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/properties/\');
        break;
    
    case \'OnDocFormPrerender\':
        $assetsUrl = $modx->getOption(\'colorpicker.assets_url\',null,$modx->getOption(\'assets_url\').\'components/colorpicker/\'); 
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            
        });
        </script>\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPicker.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorMenu.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPickerField.js\');		
        $modx->regClientCSS($assetsUrl.\'resources/css/colorpicker.css\');
        break;
     */
}
return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    7 => 
    array (
      'id' => '7',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'migxResizeOnUpload',
      'description' => '',
      'editor_type' => '0',
      'category' => '4',
      'cache_type' => '0',
      'plugincode' => '/**
 * migxResizeOnUpload Plugin
 *
 * Events: OnFileManagerUpload
 * Author: Bruno Perner <b.perner@gmx.de>
 * Modified to read multiple configs from mediasource-property
 * 
 * First Author: Vasiliy Naumkin <bezumkin@yandex.ru>
 * Required: PhpThumbOf snippet for resizing images
 * 
 * Example: mediasource - property \'resizeConfig\':
 * [{"alias":"origin","w":"500","h":"500","far":1},{"alias":"thumb","w":"150","h":"150","far":1}]
 */

if ($modx->event->name != \'OnFileManagerUpload\') {
    return;
}


$file = $modx->event->params[\'files\'][\'file\'];
$directory = $modx->event->params[\'directory\'];

if ($file[\'error\'] != 0) {
    return;
}

$name = $file[\'name\'];
//$extensions = explode(\',\', $modx->getOption(\'upload_images\'));

$source = $modx->event->params[\'source\'];

if ($source instanceof modMediaSource) {
    //$dirTree = $modx->getOption(\'dirtree\', $_REQUEST, \'\');
    //$modx->setPlaceholder(\'docid\', $resource_id);
    $source->initialize();
    $basePath = str_replace(\'/./\', \'/\', $source->getBasePath());
    //$cachepath = $cachepath . $dirTree;
    $baseUrl = $modx->getOption(\'site_url\') . $source->getBaseUrl();
    //$baseUrl = $baseUrl . $dirTree;
    $sourceProperties = $source->getPropertyList();

    //echo \'<pre>\' . print_r($sourceProperties, 1) . \'</pre>\';
    //$allowedExtensions = $modx->getOption(\'allowedFileTypes\', $sourceProperties, \'\');
    //$allowedExtensions = empty($allowedExtensions) ? \'jpg,jpeg,png,gif\' : $allowedExtensions;
    //$maxFilesizeMb = $modx->getOption(\'maxFilesizeMb\', $sourceProperties, \'8\');
    //$maxFiles = $modx->getOption(\'maxFiles\', $sourceProperties, \'0\');
    //$thumbX = $modx->getOption(\'thumbX\', $sourceProperties, \'100\');
    //$thumbY = $modx->getOption(\'thumbY\', $sourceProperties, \'100\');
    $resizeConfigs = $modx->getOption(\'resizeConfigs\', $sourceProperties, \'\');
    $resizeConfigs = $modx->fromJson($resizeConfigs);
    $thumbscontainer = $modx->getOption(\'thumbscontainer\', $sourceProperties, \'thumbs/\');
    $imageExtensions = $modx->getOption(\'imageExtensions\', $sourceProperties, \'jpg,jpeg,png,gif,JPG\');
    $imageExtensions = explode(\',\', $imageExtensions);
    //$uniqueFilenames = $modx->getOption(\'uniqueFilenames\', $sourceProperties, false);
    //$onImageUpload = $modx->getOption(\'onImageUpload\', $sourceProperties, \'\');
    //$onImageRemove = $modx->getOption(\'onImageRemove\', $sourceProperties, \'\');
    $cleanalias = $modx->getOption(\'cleanFilename\', $sourceProperties, false);

}

if (is_array($resizeConfigs) && count($resizeConfigs) > 0) {
    foreach ($resizeConfigs as $rc) {
        if (isset($rc[\'alias\'])) {
            $filePath = $basePath . $directory;
            $filePath = str_replace(\'//\',\'/\',$filePath);
            if ($rc[\'alias\'] == \'origin\') {
                $thumbPath = $filePath;
            } else {
                $thumbPath = $filePath . $rc[\'alias\'] . \'/\';
                $permissions = octdec(\'0\' . (int)($modx->getOption(\'new_folder_permissions\', null, \'755\', true)));
                if (!@mkdir($thumbPath, $permissions, true)) {
                    $modx->log(MODX_LOG_LEVEL_ERROR, sprintf(\'[migxResourceMediaPath]: could not create directory %s).\', $thumbPath));
                } else {
                    chmod($thumbPath, $permissions);
                }

            }


            $filename = $filePath . $name;
            $thumbname = $thumbPath . $name;
            $ext = substr(strrchr($name, \'.\'), 1);
            if (in_array($ext, $imageExtensions)) {
                $sizes = getimagesize($filename);
                echo $sizes[0]; 
                //$format = substr($sizes[\'mime\'], 6);
                if ($sizes[0] > $rc[\'w\'] || $sizes[1] > $rc[\'h\']) {
                    if ($sizes[0] < $rc[\'w\']) {
                        $rc[\'w\'] = $sizes[0];
                    }
                    if ($sizes[1] < $rc[\'h\']) {
                        $rc[\'h\'] = $sizes[1];
                    }
                    $type = $sizes[0] > $sizes[1] ? \'landscape\' : \'portrait\';
                    if (isset($rc[\'far\']) && $rc[\'far\'] == \'1\' && isset($rc[\'w\']) && isset($rc[\'h\'])) {
                        if ($type = \'landscape\') {
                            unset($rc[\'h\']);
                        }else {
                            unset($rc[\'w\']);
                        }
                    }

                    $options = \'\';
                    foreach ($rc as $k => $v) {
                        if ($k != \'alias\') {
                            $options .= \'&\' . $k . \'=\' . $v;
                        }
                    }
                    $resized = $modx->runSnippet(\'phpthumbof\', array(\'input\' => $filePath . $name, \'options\' => $options));
                    rename(MODX_BASE_PATH . substr($resized, 1), $thumbname);
                }
            }


        }
    }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    8 => 
    array (
      'id' => '8',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'pdoTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '5',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        $fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
        $path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);

        $fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
        $path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);
        break;

    case \'OnBeforeSaveWebPageCache\':
        if (!empty($modx->config[\'fenom_jscripts\'])) {
            foreach ($modx->config[\'fenom_jscripts\'] as $key => $value) {
                unset($modx->resource->_jscripts[$key]);
            }
            $modx->resource->_jscripts = array_values($modx->resource->_jscripts);
        }
        if (!empty($modx->config[\'fenom_sjscripts\'])) {
            foreach ($modx->config[\'fenom_sjscripts\'] as $key => $value) {
                unset($modx->resource->_sjscripts[$key]);
            }
            $modx->resource->_sjscripts = array_values($modx->resource->_sjscripts);
        }
        if (!empty($modx->config[\'fenom_loadedscripts\'])) {
            foreach ($modx->config[\'fenom_loadedscripts\'] as $key => $value) {
                unset($modx->resource->_loadedjscripts[$key]);
            }
        }
        break;

    case \'OnSiteRefresh\':
        /** @var pdoTools $pdoTools */
        if ($pdoTools = $modx->getService(\'pdoTools\')) {
            if ($pdoTools->clearFileCache()) {
                $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': pdoTools\');
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/pdotools/elements/plugins/plugin.pdotools.php',
    ),
    9 => 
    array (
      'id' => '9',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'SimpleSearchIndexer',
      'description' => 'Automatically indexes Resources into Solr.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Plugin to index Resources whenever they are changed, published, unpublished,
 * deleted, or undeleted.
 *
 * @var modX $modx
 * @var SimpleSearch $search
 *
 * @package simplesearch
 */

require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

$search->loadDriver($scriptProperties);
if (!$search->driver || (!($search->driver instanceof SimpleSearchDriverSolr) && !($search->driver instanceof SimpleSearchDriverElastic))) return;

/**
 * helper method for missing params in events
 * @param modX $modx
 * @param array $children
 * @param int $parent
 * @return boolean
 */
if (!function_exists(\'SimpleSearchGetChildren\')) {
    function SimpleSearchGetChildren(&$modx,&$children,$parent) {
        $success = false;
        $kids = $modx->getCollection(\'modResource\',array(
            \'parent\' => $parent,
        ));
        if (!empty($kids)) {
            /** @var modResource $kid */
            foreach ($kids as $kid) {
                $children[] = $kid->toArray();
                SimpleSearchGetChildren($modx,$children,$kid->get(\'id\'));
            }
        }
        return $success;
    }
}

$action = \'index\';
$resourcesToIndex = array();
switch ($modx->event->name) {
    case \'OnDocFormSave\':
        $action = \'index\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();

        if ($resourceArray[\'published\'] == 1 && $resourceArray[\'deleted\'] == 0) {
            $action = \'index\';
            foreach ($_POST as $k => $v) {
                if (substr($k,0,2) == \'tv\') {
                    $id = str_replace(\'tv\',\'\',$k);
                    /** @var modTemplateVar $tv */
                    $tv = $modx->getObject(\'modTemplateVar\',$id);
                    if ($tv) {
                        $resourceArray[$tv->get(\'name\')] = $tv->renderOutput($resource->get(\'id\'));
                        $modx->log(modX::LOG_LEVEL_DEBUG,\'Indexing \'.$tv->get(\'name\').\': \'.$resourceArray[$tv->get(\'name\')]);
                    }
                    unset($resourceArray[$k]);
                }
            }
        } else {
            $action = \'removeIndex\';
        }

        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnDocPublished\':
        $action = \'index\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnDocUnpublished\':
    case \'OnDocUnPublished\':
        $action = \'removeIndex\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnResourceDuplicate\':
        $action = \'index\';
        /** @var modResource $newResource */
        $resourcesToIndex[] = $newResource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$newResource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case \'OnResourceDelete\':
        $action = \'removeIndex\';
        $resourcesToIndex[] = $resource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$resource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case \'OnResourceUndelete\':
        $action = \'index\';
        $resourcesToIndex[] = $resource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$resource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
}

foreach ($resourcesToIndex as $resourceArray) {
    if (!empty($resourceArray[\'id\'])) {
        if ($action == \'index\') {
            $search->driver->index($resourceArray);
        } else if ($action == \'removeIndex\') {
            $search->driver->removeIndex($resourceArray[\'id\']);
        }
    }
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    10 => 
    array (
      'id' => '10',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Updater Notifier',
      'description' => 'This plugin manages the notifications for updates.',
      'editor_type' => '0',
      'category' => '7',
      'cache_type' => '0',
      'plugincode' => '$eventName = $modx->event->name;

switch($eventName) {

    case \'OnUpdaterNotify\':
    case \'OnUpdaterNotifyCore\':
    case \'OnUpdaterNotifyPackages\':
        $pfx = "[Updater Notifier] ";

        /* set the keyed system setting to current time */
        if (!function_exists(\'resetTimedSetting\')) {
            function resetTimedSetting(&$modx, $key, $value = \'\') {
                $digestSetting = $modx->getObject(\'modSystemSetting\', $key);
                if (!is_null($digestSetting)) {
                    $digestSetting->set(\'value\', strtotime(\'now\'));
                    $digestSetting->save();
                    $cacheRefreshOptions = array(\'system_settings\' => array());
                    $modx->cacheManager->refresh($cacheRefreshOptions);
                }
                //$modx->log(modX::LOG_LEVEL_DEBUG, "[updater-notifier] set time key \'" . $key . "\': " . $modx->getOption($key, null, \'???\'));
                return;
            }
        }
        /* set the keyed system setting to current time */
        if (!function_exists(\'resetLastSendSetting\')) {
            function resetLastSendSetting($key, $value, &$modx) {
                $digestSetting = $modx->getObject(\'modSystemSetting\', $key);
                if (!is_null($digestSetting)) {
                    $digestSetting->set(\'value\', $value);
                    $digestSetting->save();
                    $cacheRefreshOptions = array(\'system_settings\' => array());
                    $modx->cacheManager->refresh($cacheRefreshOptions);
                }
                //$modx->log(modX::LOG_LEVEL_DEBUG, "[updater-notifier] set lastsend key \'" . $key . "\': " . $modx->getOption($key, null, \'???\'));
                return;
            }
        }

        /* save retrieve uncached option */
        if (!function_exists(\'getSafeOption\')) {
            function getSafeOption(&$modx, $key) {
                $setting = $modx->getObject(\'modSystemSetting\',$key);
                /*
                if (is_null($setting)) {
                    $modx->log(modX::LOG_LEVEL_WARN, "[Updater] null value returned for setting: ".$key." Does it exist?");
                }
                */
                return ($setting) ? $setting->get(\'value\') : "";
            }
        }

        $debug = getSafeOption($modx, \'updater.debug\');
        if (!$debug && $eventName=="OnWebPageComplete") {
            return;
        }

        if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} Updater request called");

        if (!$modx->loadClass(\'Updater\', MODX_CORE_PATH . \'components/updater/model/\', true, true)) {
            return;
        }
        $updater = new Updater($modx);

        /* this event works as a semi-functional cron simulator */
        /* it is fired for any web or manager request */
        /* now we need the most restrictive and quickest filter first */

        /* Send core notifications */
        $coreNotifications = getSafeOption($modx,\'updater.send_core_notifications\');
        if ( $coreNotifications === "1") {

            $timestamp = getSafeOption($modx, \'updater.last_send_core_notification\');

            $last_sendcore_json = getSafeOption($modx, \'updater.last_send_core\');
            if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} notify min every : " . $modx->getOption(\'updater.send_notification_hours\', null, 24) . " hours");

            if (isset($timestamp) && !is_null($timestamp)) {
                $elapsedHours = ((strtotime(\'now\') - $timestamp) / 3600);
                if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} elapsed hours since last core send check: " . round($elapsedHours, 2));

                /* check if time is over */
                if ($elapsedHours >= $modx->getOption(\'updater.send_notification_hours\', null, 24)) {
                    resetTimedSetting($modx, \'updater.last_send_core_notification\');


                    /* check if we need to refresh the core */
                    if ($updater->isCoreRefreshNeeded()) {
                        if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} need to refresh core data before sending email.");
                        $updater->refreshCoreVersion();
                        $updater->refreshCoreDownload();
                    }

                    /* check if the core is updateable */
                    if ( $updater->isCoreUpdateable() === true ) {

                        $last_send_core = $last_sendcore_json; //$modx->getOption(\'updater.last_send_core\', null, $updater->getCurrentCoreVersion());
                        $new_core = $updater->getLatestCoreVersion();

                        if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} last send: ".$last_send_core.", latest: ".$new_core);

                        if ( $debug || ( isset($last_send_core) && ($last_send_core==="" || $last_send_core!==$new_core))) {
                            resetLastSendSetting(\'updater.last_send_core\', $new_core, $modx);

                            if ($modx->getOption(\'updater.mail_format_html\', null, false) === "1") {
                                $chunk = file_get_contents(MODX_CORE_PATH . \'components/updater/elements/tpl/notification_mail_coreinfo_html.tpl\');
                            } else {
                                $chunk = file_get_contents(MODX_CORE_PATH . \'components/updater/elements/tpl/notification_mail_coreinfo.tpl\');
                            }

                            //$logodata = file_get_contents(MODX_MANAGER_PATH . \'templates/default/images/modx-icon-color.svg\');
                            $logodata = file_get_contents(MODX_ASSETS_PATH."components/updater/img/modx-icon-color.svg");
                            $placeholders = array(
                                \'logodata\' => base64_encode($logodata),
                                \'core_update\' => $new_core,
                                \'core_current\' => $updater->getCurrentCoreVersion(),
                                \'core_changelog_url\' => "https://github.com/modxcms/revolution/blob/master/core/docs/changelog.txt",
                                \'core_download_url\' => $updater->constructCoreDownloadUrl(),
                            );

                            $modx->setPlaceholders($placeholders);
                            $modx->getParser()->processElementTags(\'\', $chunk, true);

                            $subject = "Core update available for MODX site \'" . $modx->getOption(\'site_name\') . "\'";
                            $from = $modx->getOption(\'emailsender\',\'yourmodxsite\');
                            $fromName = "MODX System Notifier (Core)";

                            $time = microtime(true);
                            $modx->getService(\'mail\', \'mail.modPHPMailer\');

                            $modx->mail->set(modMail::MAIL_BODY, $chunk);
                            $modx->mail->set(modMail::MAIL_FROM, $from);
                            $modx->mail->set(modMail::MAIL_FROM_NAME, $fromName);
                            $modx->mail->set(modMail::MAIL_SUBJECT, $subject);


                            // TODO: walk through users here
                            $modx->mail->address(\'to\', $modx->getOption(\'updater.core_notifications_mail\'));
                            $modx->mail->setHTML($modx->getOption(\'updater.mail_format_html\', null, false) === "1");

                            if ($debug) $modx->log(4,$pfx." intermediate time for setting up core mail: ".round(microtime(true)-$time,2));

                            if (!$modx->mail->send()) {
                                $modx->log(modX::LOG_LEVEL_ERROR, "${pfx} An error occurred while trying to send the email: " . $modx->mail->mailer->ErrorInfo);
                            } else {
                                $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} Successfully send core data to " . $modx->getOption(\'updater.core_notifications_mail\'));
                            }
                            if ($debug) $modx->log(4,$pfx." intermediate time for sending core mail: ".round(microtime(true)-$time,2));

                            $modx->mail->reset();
                            if ($debug) $modx->log(4,$pfx." final time for sending core mail: ".round(microtime(true)-$time,2));

                        } else {
                            if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} No need to send core data.");
                        }
                    }
                }
            }
        }


        /* Send package notifications */
        $packageNotifications = getSafeOption($modx,\'updater.send_package_notifications\');
        if ($packageNotifications==="1") {

            $timestamp = getSafeOption($modx,\'updater.last_send_package_notification\');

            $last_sendpackages_json = getSafeOption($modx, \'updater.last_send_packages\');
            // if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "[updater-notifier] notify min every : ".$modx->getOption(\'updater.send_notification_hours\',null,24)." hours");

            if (isset($timestamp) && !is_null($timestamp)) {
                $elapsedHours = ((strtotime(\'now\') - $timestamp) / 3600);
                // if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "[updater-notifier] elapsed hours since last check: ".round($elapsedHours,2));

                /* check if time is over */
                if ($elapsedHours >= $modx->getOption(\'updater.send_notification_hours\',null,24)) {
                    $time = microtime(true);

                    /*
                        until now this strange reformatting is necessary because package controller
                        returns nonsense and we did not touch it in updater class
                    */
                    $package_names_update = array();
                    $tmp = $updater->getPackagesUpdateList();
                    if (isset($tmp) && !is_null($tmp)) {
                        $packages_names_update  = array_map(
                            function($v) {
                                return ($v[0][\'name\']." > ".$v[0][\'signature\']);
                            }, $tmp
                        );
                    } else {
                        return;
                    }

                    $packages_names_install = array();
                    $tmp = $updater->getPackagesList();
                    if (isset($tmp) && !is_null($tmp)) {
                        $packages_names_install = array_map(
                            function ($v) {
                                return ($v[\'package_name\'] . ": " . $v[\'signature\']);
                            },
                            array_filter(
                                $tmp,
                                function ($v) {
                                    return $v[\'installed\'] == "";
                                }
                            )
                        );
                    }

                    if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} packages to install: ".json_encode($packages_names_install));
                    if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} packages to update: ".json_encode($packages_names_update));


                    if (sizeof($packages_names_install)+sizeof($packages_names_update) > 0) {
                        if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} there are updates to notify!");
                        resetTimedSetting($modx, \'updater.last_send_package_notification\');

                        $store_send_packages = array_merge(
                            array_map(
                                function($v) {
                                    return array( \'name\' => $v[0][\'name\'], \'installed\'=>$v[0][\'installed\'], \'update\' => $v[0][\'signature\']);
                                },
                                $updater->getPackagesUpdateList()
                            ),
                            array_map(
                                function($v) {
                                    return array( \'name\' => $v[\'name\'], \'installed\'=>\'previous\', \'update\' => $v[\'signature\']);
                                },
                                array_filter($updater->getPackagesList(), function($v) {  return $v[\'installed\']==""; })
                            )
                        );


                        if ($debug)  $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} data: ".json_encode($store_send_packages));
                        if ($debug)  $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} packages_names_update: ".json_encode($packages_names_update));
                        if ($debug)  $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} packages_names_install: ".json_encode($packages_names_install));

                        $logodata = file_get_contents(MODX_ASSETS_PATH."components/updater/img/modx-icon-color.svg");

                        $placeholders = array(
                            \'logodata\' => base64_encode($logodata),
                            \'logoformat\' => \'\',
                            \'updater.packages_names_install\' => \'\'.implode("\\n",$packages_names_install),
                            \'updater.packages_names_update\' => \'\'.implode("\\n",$packages_names_update),
                        );

                        $store_send_packages_json = json_encode(array_values($store_send_packages));

                        /* only send mail if the packages list differs from last send packages list */
                        if ($store_send_packages_json !== $last_sendpackages_json || $debug) {
                            resetLastSendSetting(\'updater.last_send_packages\', $store_send_packages_json, $modx);

                            if ($modx->getOption(\'updater.mail_format_html\',null,false)==="1") {
                                $chunk = file_get_contents(MODX_CORE_PATH . \'components/updater/elements/tpl/notification_mail_packageinfo_html.tpl\');
                            } else {
                                $chunk = file_get_contents(MODX_CORE_PATH . \'components/updater/elements/tpl/notification_mail_packageinfo.tpl\');
                            }

                            $modx->setPlaceholders($placeholders);
                            $modx->getParser()->processElementTags(\'\', $chunk, true);

                            $subject = "Package update notification for MODX site \'" . $modx->getOption(\'site_name\') . "\'";
                            $from = $modx->getOption(\'emailsender\',\'yourmodxsite\');
                            $fromName = "MODX System Notifier (Packages)";

                            $time=microtime(true);

                            $modx->getService(\'mail\', \'mail.modPHPMailer\');
                            $modx->mail->set(modMail::MAIL_BODY, $chunk);
                            $modx->mail->set(modMail::MAIL_FROM, $from);
                            $modx->mail->set(modMail::MAIL_FROM_NAME, $fromName);
                            $modx->mail->set(modMail::MAIL_SUBJECT, $subject);
                            // TODO: walk through users here
                            $modx->mail->address(\'to\', $modx->getOption(\'updater.package_notifications_mail\'));
                            $modx->mail->setHTML($modx->getOption(\'updater.mail_format_html\',null,false)==="1");

                            if (!$modx->mail->send()) {
                                $modx->log(modX::LOG_LEVEL_ERROR, "${pfx} An error occurred while trying to send the email: " . $modx->mail->mailer->ErrorInfo);
                            } else {
                                $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} Successfully send package data to ".$modx->getOption(\'updater.package_notifications_mail\'));
                            }

                            $modx->mail->reset();
                            if ($debug) $modx->log(4,$pfx." time for sending packages mail: ".round(microtime(true)-$time,2));


                        } else {
                            if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} There are updates available, but this notification was already send: ".$store_send_packages_json);
                        }

                    }
                }
            } else {
                resetTimedSetting($modx, \'updater.last_send_package_notification\');
            }
        }

        /* Send digest */
        if ($modx->getOption(\'updater.send_version_digest_user\',null,false)==="1") {
            $timestamp = $modx->getOption(\'updater.last_send_version_digest\', null, \'\');
            if (isset($timestamp) && !is_null($timestamp)) {
                $elapsedHours = ((strtotime(\'now\') - $timestamp) / 3600);
                //$modx->log(modX::LOG_LEVEL_INFO, "[updater-notifier] time elapsed: " . $elapsedHours . " h");

                /* check if digest is over */
                if ($elapsedHours > $modx->getOption(\'updater.send_version_digest_hours\') || $debug) {
                    // reset the timestamp here to prevent multiple mails
                    resetTimedSetting($modx, \'updater.last_send_version_digest\');

                    if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} SEND DIGEST.");

                    $packageList = array();
                    $packageList = $updater->getPackagesList();

                    $coreMessage = "You are up to date with version " . $updater->getCurrentCoreVersion();
                    $coreMessageHTML = "<div style=\'color:green\'>" . $coreMessage . "</div>";
                    if ($updater->isCoreUpdateable()) {
                        $coreMessage = "An UPDATE to version " . $updater->getLatestCoreVersion() . " is available!";
                        $coreMessageHTML = "<div style=\'color:red\'>" . $coreMessage . "</div>";
                        $coreMessage = "*** " . $coreMessage . " ***";
                    }

                    $packages_list = str_pad(\'Package\', 32) . " | " . str_pad(\'Version signature\', 40) . " | " . "update?\\n";
                    $packages_list .= str_pad("", strlen($packages_list), \'-\') . "\\n";
                    $updates_list = $updater->getPackagesUpdateList();
                    $updates = 0;
                    $installed = 0;
                    foreach ($updater->getPackagesList() as $p) {
                        $packages_list .= str_pad($p[\'name\'], 32) . " | " . str_pad($p[\'signature\'], 40);
                        if ($p[\'updateable\'] === true) {
                            $packages_list .= " | UPDATE AVAILABLE TO " . $updates_list[$p[\'signature\']][0][\'version\'];

                            $updates++;
                        } else {
                            if ($p[\'installed\'] == "") {
                                $packages_list .= " | Installation pending";
                                $installed++;
                            } else {
                                $packages_list .= " |";
                            }
                        }
                        $packages_list .= "\\n";
                    }

                    $logodata = file_get_contents(MODX_ASSETS_PATH."components/updater/img/modx-icon-color.svg");
                    //$logodata = file_get_contents(MODX_MANAGER_PATH . \'templates/default/images/modx-icon-color.svg\');

                    $placeholders = array(
                        \'logodata\' => base64_encode($logodata),
                        \'core_message\' => $coreMessage,
                        \'packages_list\' => $packages_list,
                        //\'packages_updates\' => json_encode($updates_list),
                        \'update_core\' => ($updater->getLatestCoreVersion() !== $updater->getCurrentCoreVersion()) ? $updater->getLatestCoreVersion() : \'\',
                        \'installable\' => $installed,
                        \'updateable\' => $updates
                    );

                    $placeholders[\'packages_message\'] = "";
                    if ($updates > 0) {
                        $placeholders[\'updater.packages_message\'] = "" . $updates . " packages can be updated!!!\\n";
                    } else {
                        $placeholders[\'packages_message\'] = "All packages are up to date.\\n";
                    }
                    if ($installed > 0) {
                        $placeholders[\'packages_message\'] .= "" . $installed . " packages are not installed yet.";
                    }

                    // send the digest
                    //$message = $modx->getChunk(\'updater.mail_version_digest.tpl\', $placeholders);
                    $chunk = file_get_contents(MODX_CORE_PATH . \'components/updater/elements/tpl/notification_mail_text.tpl\');
                    $modx->setPlaceholders($placeholders);
                    $modx->getParser()->processElementTags(\'\', $chunk, true);
                    $message = $chunk;

                    $subject = "System notification for MODX site \'" . $modx->getOption(\'site_name\') . "\'";
                    $from = $modx->getOption(\'emailsender\',\'yourmodxsite\');
                    $fromName = "MODX System Notifier";

                    $time=microtime(true);

                    $modx->getService(\'mail\', \'mail.modPHPMailer\');
                    $modx->mail->set(modMail::MAIL_BODY, $message);
                    $modx->mail->set(modMail::MAIL_FROM, $from);
                    $modx->mail->set(modMail::MAIL_FROM_NAME, $fromName);
                    $modx->mail->set(modMail::MAIL_SUBJECT, $subject);
                    // TODO: walk through users here
                    $modx->mail->address(\'to\', $modx->getOption(\'updater.core_notifications_mail\'));
                    $modx->mail->setHTML(false);

                    if (!$modx->mail->send()) {
                        $modx->log(modX::LOG_LEVEL_ERROR, "${pfx} An error occurred while trying to send the email: " . $modx->mail->mailer->ErrorInfo);
                    } else {
                        if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} Successfully send digest to ".$modx->getOption(\'updater.core_notifications_mail\'));
                    }

                    $modx->mail->reset();
                    if ($debug) $modx->log(4,$pfx." time for sending digest mail: ".round(microtime(true)-$time,2));
                }
            } else {
                /* no timestamp in system settings? */
                if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "${pfx} no time stamp in system settings found.");
                resetTimedSetting($modx, \'updater.last_send_version_digest\');
            }
        }
        break;

}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    11 => 
    array (
      'id' => '11',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Updater Cache Observer',
      'description' => 'This plugin observes package changes and refreshes Updaters caches accordingly.',
      'editor_type' => '0',
      'category' => '7',
      'cache_type' => '0',
      'plugincode' => '$eventName = $modx->event->name;
switch($eventName) {

    case \'OnCacheUpdate\':

        /* only trigger a refresh if packages or system settings are changed */
        $packageKey = $modx->getOption(\'cache_packages_key\', null, \'packages\');
        $settingsKey = $modx->getOption(\'cache_system_settings_key\', null, \'system_settings\');

        if ( isset($results[ $settingsKey ]) && $results[$settingsKey]) {
            //$modx->log(modX::LOG_LEVEL_DEBUG, "[Updater] clearing internal caches.");
            //$modx->log(modX::LOG_LEVEL_WARN, "[Updater] " . print_r($results, true));

            //$modx->log(modX::LOG_LEVEL_DEBUG, "[Updater]  clear packages cache");
            $result1 = $modx->cacheManager->clean(array(xPDO::OPT_CACHE_KEY => \'updater-packages\'));

            //$modx->log(modX::LOG_LEVEL_DEBUG, "[Updater]  clear core cache");
            $result2 = $modx->cacheManager->clean(array(xPDO::OPT_CACHE_KEY => \'updater-core\'));

            if ($result1 && $result2) {
                //$modx->log(modX::LOG_LEVEL_INFO, "[Updater] successfully cleared Updaters\' internal caches due to changed system settings/cache clear");
            } else {
                //$modx->log(modX::LOG_LEVEL_WARN, "[Updater] There was an error clearing Updaters\' internal caches.");
            }
            break;
        }

        if ( isset($results[ $packageKey ]) && $results[$packageKey]) {
            $modx->log(modX::LOG_LEVEL_INFO, "[Updater] packages have been changed, clearing updater cache.");
            $cacheOptions = array( xPDO::OPT_CACHE_KEY => \'updater-packages\' );
            $result = $modx->cacheManager->clean($cacheOptions);
            //$modx->log(modX::LOG_LEVEL_INFO, "[Updater] clean result: ".$result);
            //$modx->log(modX::LOG_LEVEL_INFO, "[Updater] Successfully cleared updater cache after package change.");
        }

        break;

    default:
        break;
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    12 => 
    array (
      'id' => '12',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Updater Cron',
      'description' => 'This plugin simulates a cronlike scheduler and is triggered by web and manager page requests.',
      'editor_type' => '0',
      'category' => '7',
      'cache_type' => '0',
      'plugincode' => '/*
    This plugin implements a simple but effective cron mechanism to refresh updaters data.

    How does it work?
        - cronlike schedule is triggered by a web page request
        - on the init of the request the plugin is triggered
        - the file modification time of an (empty) file is checked
            (this is done way faster than to check a modx option object, which is generally not intended to change frequently,
             measurement on the same machine: get system setting ~0.01s, filemtime ~0.0005s !!!)
        - if the last saved time compared to the current time is greater than a preset interval,
            the plugin injects a tiny javascript to the webpage
        - the javascript is called async and finally triggers the refresh of the (sometimes time-consuming) updater refresh

    Benefits:
        This way there is no measureable time gap for your webpage to be delivered (instead of directly refreshing the
        updater data), so visitors and your websites performance will not be affected, even if the updater task runs a long time
        or runs into a timeout.
        There is no need to setup a cronjob for this (which may not be possible due to the environment or the client using updater).

    Drawbacks:
        This only works if enough visitors with js enabled browser frequently visit your webpage. If you only have 1 hit per month,
        the updaters cache will be refreshed once per month as well, regardless of the interval. In this case
        it is a better idea to call the script /connectors/updater.cron.php with a cronjob instead.
*/

$eventName = $modx->event->name;
switch($eventName) {
    case "OnManagerPageInit":
    case "OnWebPageInit":
        $key = \'updater.lastcroninject\';

        //$t = microtime(true);
        $lastInjectTime = "";
        if (file_exists(MODX_CORE_PATH.\'cache/UPDATER_CRON\')) {
            $lastInjectTime = filemtime(MODX_CORE_PATH.\'cache/UPDATER_CRON\');
        }

        $currentTime = time();
        if (is_null($lastInjectTime) || $lastInjectTime == \'\') {
            $lastInjectTime = 0;
        }

        /*
         * Check if time interval is reached. The interval is hardcoded to prevent unneccessary option lookups again.
         * Current Interval: 3600 = 1 hour
         *
         * That does not necessarily mean, that every interval an update lookup is done. This only triggers
         * following up events, the event handlers themselves have cache times to stick to.
         * This interval only ensures, that at least every hour the followups are checked.
         */

        if (($currentTime - $lastInjectTime) >= 3600) {
            //$modx->log(modX::LOG_LEVEL_DEBUG, "[updater cron-plugin] elapsed seconds since last core refresh: " . ($currentTime - $lastInjectTime) ." - we need to refresh!");

            /* adjust the last saved time stamp */
            touch(MODX_CORE_PATH.\'cache/UPDATER_CRON\');

            /* inject javascript into web page */
            //$modx->log(4, "[updater cron-plugin] injecting cron script at time ".$currentTime);
            //$modx->regClientScript(MODX_ASSETS_URL . \'components/updater/js/updater.croninject.js\');

            /*
                using regClientScript is not the favoured way here: it adds a roundtrip and does not give the
                chance to call the script async!
                Instead we will inject our tiny script code here direcly!
                    - the code could be inlined here, but is not for future development
            */
            $script  = "<script type=\'text/javascript\'>";
            $script .= "var U=\'".MODX_CONNECTORS_URL."updater/updater.cron.php\';\\n";
            $script .= file_get_contents( MODX_ASSETS_PATH . \'components/updater/js/updater.croninject.js\');
            $script .= "</script>";

            $modx->regClientHTMLBlock($script);
        }
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    13 => 
    array (
      'id' => '13',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Updater Refresh',
      'description' => 'This plugin handles refresh events triggered e.g. by the cron handler.',
      'editor_type' => '0',
      'category' => '7',
      'cache_type' => '0',
      'plugincode' => '$eventName = $modx->event->name;

switch($eventName) {
    case \'OnUpdaterCoreRefresh\':
    case \'OnUpdaterPackagesRefresh\':
        /* just get the updater object and refresh core and extras */
        /* flag to only refresh if caches are invalid! */

        $debug = $modx->getOption(\'updater.debug\', null, false);

        if ($debug) $modx->log(modX::LOG_LEVEL_DEBUG, "[Updater] refresh plugin was triggered.");

        /* try to get the Updater object */
        if (!$modx->loadClass(\'Updater\', MODX_CORE_PATH . \'components/updater/model/\', true, true)) {
            return;
        }

        /*
            instead of handling these events we can also add js triggers to our pages which
            call the refresh connector directly.
        */

        $updater = new Updater($modx, array());

        if ($eventName=="OnUpdaterCoreRefresh") {
            if ($updater->isCoreRefreshNeeded()) {
                $updater->refreshCoreVersion();
                $updater->refreshCoreDownload();
                $updater->refreshMUIFromURL();
            }
        }
        if ($eventName=="OnUpdaterPackagesRefresh") {
            if ($updater->isPackageRefreshNeeded()) {
                $updater->refreshPackageData();
            }
        }
}

return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    14 => 
    array (
      'id' => '14',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'seoPro',
      'description' => 'SEO optimizing plugin for MODx Revolution.',
      'editor_type' => '0',
      'category' => '9',
      'cache_type' => '0',
      'plugincode' => '/**
 * The base seoPro snippet.
 *
 * @package seopro
 */
$seoPro = $modx->getService(\'seopro\', \'seoPro\', $modx->getOption(\'seopro.core_path\', null, $modx->getOption(\'core_path\') . \'components/seopro/\') . \'model/seopro/\', $scriptProperties);
if (!($seoPro instanceof seoPro)) {
    return \'\';
}

$disabledTemplates = explode(\',\', $modx->getOption(\'seopro.disabledtemplates\', null, \'0\'));

switch ($modx->event->name) {
    case \'OnDocFormRender\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }
        
        
        $currClassKey = $resource->get(\'class_key\');
        $strFields = $modx->getOption(\'seopro.fields\', null, \'pagetitle:70,longtitle:70,description:155,alias:2023,menutitle:2023\');
        $arrFields = array();
        if (is_array(explode(\',\', $strFields))) {
            foreach (explode(\',\', $strFields) as $field) {
                list($fieldName, $fieldCount) = explode(\':\', $field);
                $arrFields[$fieldName] = $fieldCount;
            }
        } else {
            return \'\';
        }

        $keywords = \'\';
        $modx->controller->addLexiconTopic(\'seopro:default\');
        if ($mode == \'upd\') {
            $url = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', \'full\');
            $url = str_replace($resource->get(\'alias\'), \'<span id=\\"seopro-replace-alias\\">\' . $resource->get(\'alias\') . \'</span>\', $url);
            $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
            if ($seoKeywords) {
                $keywords = $seoKeywords->get(\'keywords\');
            }
        } else {
            if ($_REQUEST[\'id\']) {
                $url = $modx->makeUrl($_REQUEST[\'id\'], \'\', \'\', \'full\');
                $url .= \'/<span id=\\"seopro-replace-alias\\"></span>\';
            } else {
                $url = $modx->getOption(\'site_url\') . \'<span id=\\"seopro-replace-alias\\"></span>\';
            }
        }

        if ($_REQUEST[\'id\'] == $modx->getOption(\'site_start\')) {
            unset($arrFields[\'alias\']);
            unset($arrFields[\'menutitle\']);
        }


        $config = $seoPro->config;
        unset($config[\'resource\']);
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            seoPro.config = \' . $modx->toJSON($config) . \';
            seoPro.config.record = "\' . $keywords . \'";
            seoPro.config.values = {};
            seoPro.config.fields = "\' . implode(",", array_keys($arrFields)) . \'";
            seoPro.config.chars = \' . $modx->toJSON($arrFields) . \'
            seoPro.config.url = "\' . $url . \'";
        });
    </script>\');

        /* include CSS and JS*/
        $version = $modx->getVersionData();
        if($version[\'version\'] == 2 && $version[\'major_version\'] == 2){
            $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr.css\');
        }else{
            $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr23.css\');
        }
        $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/seopro.js??v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));
        $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/resource.js?v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));

        break;

    case \'OnDocFormSave\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }
        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        if (!$seoKeywords && isset($resource)) {
            $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        }
        if($seoKeywords){
            if (isset($_POST[\'keywords\'])){
                $seoKeywords->set(\'keywords\', trim($_POST[\'keywords\'], \',\'));
            } else {
                $seoKeywords->set(\'keywords\', \'\');
            }
            $seoKeywords->save();
        }
        break;

    case \'onResourceDuplicate\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }

        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        if (!$seoKeywords) {
            $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        }
        $newSeoKeywords = $modx->newObject(\'seoKeywords\');
        $newSeoKeywords->fromArray($seoKeywords->toArray());
        $newSeoKeywords->set(\'resource\', $newResource->get(\'id\'));
        $newSeoKeywords->save();
        break;

    case \'OnLoadWebDocument\':
        if ($modx->context->get(\'key\') == "mgr") {
            break;
        }
        $template = ($modx->resource->get(\'template\')) ? (string)$modx->resource->get(\'template\') : \'\';
        if (in_array($template, $disabledTemplates)) {
            break;
        }
        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $modx->resource->get(\'id\')));
        if ($seoKeywords) {
            $keyWords = $seoKeywords->get(\'keywords\');
            $modx->setPlaceholder(\'seoPro.keywords\', $keyWords);
        }
        // Render the meta title, based on system settings
        $titleFormat = $modx->getOption(\'seopro.title_format\');
        if (empty($titleFormat)) {
            $siteDelimiter = $modx->getOption(\'seopro.delimiter\', null, \'/\');
            $siteUseSitename = (boolean)$modx->getOption(\'seopro.usesitename\', null, true);
            $siteID = $modx->resource->get(\'id\');
            $siteName = $modx->getOption(\'site_name\');
            $longtitle = $modx->resource->get(\'longtitle\');
            $pagetitle = $modx->resource->get(\'pagetitle\');
            $seoProTitle = array();
            if ($siteID == $modx->getOption(\'site_start\')) {
                $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $siteName;
            } else {
                $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $pagetitle;
                if ($siteUseSitename) {
                    $seoProTitle[\'delimiter\'] = $siteDelimiter;
                    $seoProTitle[\'sitename\'] = $siteName;
                }
            }
            $title = implode(\' \', $seoProTitle);
        } else {
            $title = $modx->getOption(\'seopro.title_format\');
        }
        $modx->setPlaceholder(\'seoPro.title\', $title);
        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    15 => 
    array (
      'id' => '15',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'MinifyX',
      'description' => '',
      'editor_type' => '0',
      'category' => '13',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnSiteRefresh\':
		if ($MinifyX = $modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {
			/** @var MinifyX $MinifyX */
			$MinifyX = new MinifyX($modx, array());
			if ($MinifyX->clearCache()) {
				$modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\').\': MinifyX\');
			}
		}
		break;

	case \'OnWebPagePrerender\':
		$time = microtime(true);
		// Process scripts and styles
		if ($modx->getOption(\'minifyx_process_registered\', null, false, true)) {
			if (!$modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {return false;}

			$current = array(
				\'head\' => $modx->sjscripts,
				\'body\' => $modx->jscripts,
			);
			$included = $excluded = $prepared = $raw = array(
				\'head\' => array(\'css\' => array(), \'js\' => array(), \'html\' => array()),
				\'body\' => array(\'css\' => array(), \'js\' => array(), \'html\' => array()),
			);
			$exclude = $modx->getOption(\'minifyx_exclude_registered\');

			// Split all scripts and styles by type
			foreach ($current as $key => $value) {
				foreach ($value as $v) {
					if (preg_match(\'/<(?:link|script).*?(?:href|src)=[\\\'|"](.*?)[\\\'|"]/\', $v, $tmp)) {
						if (strpos($tmp[1], \'.css\') !== false) {
							if (!empty($exclude) && preg_match($exclude, $tmp[1])) {
								$excluded[$key][\'css\'][] = $tmp[1];
							}
							else {
								$included[$key][\'css\'][] = $tmp[1];
							}
						}
						if (strpos($tmp[1], \'.js\') !== false) {
							if (!empty($exclude) && preg_match($exclude, $tmp[1])) {
								$excluded[$key][\'js\'][] = $tmp[1];
							}
							else {
								$included[$key][\'js\'][] = $tmp[1];
							}
						}
					}
					elseif (strpos($v, \'<script\') !== false) {
						$raw[$key][\'js\'][] = trim(preg_replace(\'#<!--.*?-->(\\n|)#s\', \'\', $v));
					}
					elseif (strpos($v, \'<style\') !== false) {
						$raw[$key][\'css\'][] = trim(preg_replace(\'#/\\*.*?\\*/(\\n|)#s\', \'\', $v));
					}
					else {
						$excluded[$key][\'html\'][] = $v;
					}
				}
			}

			// Main options for MinifyX
			$scriptProperties = array(
				\'cacheFolder\' => $modx->getOption(\'minifyx_cacheFolder\', null, \'/assets/components/minifyx/cache/\', true),
				\'forceUpdate\' => $modx->getOption(\'minifyx_forceUpdate\', null, false, true),
				\'minifyJs\' => $modx->getOption(\'minifyx_minifyJs\', null, false, true),
				\'minifyCss\' => $modx->getOption(\'minifyx_minifyCss\', null, false, true),
				\'jsFilename\' => $modx->getOption(\'minifyx_jsFilename\', null, \'all\', true),
				\'cssFilename\' => $modx->getOption(\'minifyx_cssFilename\', null, \'all\', true),
			);

			/** @var MinifyX $MinifyX */
			$MinifyX = new MinifyX($modx, $scriptProperties);
			if (!$MinifyX->prepareCacheFolder()) {
				$this->modx->log(modX::LOG_LEVEL_ERROR, \'[MinifyX] Could not create cache dir "\'.$scriptProperties[\'cacheFolder\'].\'"\');
				return;
			}
			$cacheFolderUrl = MODX_BASE_URL . str_replace(MODX_BASE_PATH, \'\', $MinifyX->config[\'cacheFolder\']);

			// Process raw scripts and styles
			$tmp_dir = $MinifyX->getTmpDir() . \'resources/\' . $modx->resource->id . \'/\';
			foreach ($raw as $key => $value) {
				foreach ($value as $type => $rows) {
					$tmp = \'\';
					if ($type == \'css\' && $modx->getOption(\'minifyx_processRawCss\', null, false, true) ||
						$type == \'js\' && $modx->getOption(\'minifyx_processRawJs\', null, false, true)) {

						$text = \'\';
						foreach ($rows as $text) {
							$text = preg_replace(\'#^<(script|style).*?>#\', \'\', $text);
							$text = preg_replace(\'#</(script|style)>$#\', \'\', $text);
							$tmp .= $text;
						}

						if (!empty($tmp)) {
							$file = sha1($tmp) . \'.\' . $type;
							if (!file_exists($tmp_dir . $file)) {
								if (!file_exists($tmp_dir)) {
									$MinifyX->makeDir($tmp_dir);
								}
								file_put_contents($tmp_dir . $file, $tmp);
							}
							$included[$key][$type][] = $tmp_dir . $file;
							$raw[$key][$type] = array();
						}
					}
				}
			}

			// Combine and minify files
			foreach ($included as $key => $value) {
				foreach ($value as $type => $files) {
					if (empty($files)) {continue;}

					$filename = $MinifyX->config[$type.\'Filename\'] . \'_\';
					$extension = $MinifyX->config[$type.\'Ext\'];

					$files = $MinifyX->prepareFiles(implode(\',\', $files));
					$properties = array(
						\'minify\' => $MinifyX->config[\'minify\'.ucfirst($type)]
								? \'true\'
								: \'false\',
					);

					$result = $MinifyX->Munee($files, $properties);
					$file = $MinifyX->saveFile($result, $filename, $extension);
					if (!empty($file)) {
						$prepared[$key][$type][] = $cacheFolderUrl . $file;
					}
				}
			}

			// Combine files by type
			$final = array(
				\'head\' => array_merge(
					$excluded[\'head\'][\'css\'], $prepared[\'head\'][\'css\'], $raw[\'head\'][\'css\'],
					$excluded[\'head\'][\'js\'], $prepared[\'head\'][\'js\'], $raw[\'head\'][\'js\']
				),
				\'body\' => array_merge(
					$excluded[\'body\'][\'css\'], $prepared[\'body\'][\'css\'], $raw[\'body\'][\'css\'],
					$excluded[\'body\'][\'js\'], $prepared[\'body\'][\'js\'], $raw[\'body\'][\'js\']
				),
			);

			// Push files to tags
			foreach ($final as $type => &$value) {
				foreach ($value as &$file) {
					if (strpos($file, \'<script\') === false && strpos($file, \'<style\') === false) {
						$file = preg_match(\'/\\.css$/iu\', $file)
							? \'<link rel="stylesheet" href="\' . $file . \'" type="text/css" />\'
							: \'<script type="text/javascript" src="\' . $file . \'"></script>\';
					}
				}
				if (!empty($excluded[$type][\'html\'])) {
					$value[] = implode("\\n", $excluded[$type][\'html\']);
				}
			}
			unset($value);

			// Replace tags in web page
			$modx->resource->_output = str_replace(
				array($modx->getRegisteredClientStartupScripts() . "\\n</head>", $modx->getRegisteredClientScripts() . "\\n</body>"),
				array(implode("\\n", $final[\'head\']) . "\\n</head>", implode("\\n", $final[\'body\']) . "\\n</body>"),
				$modx->resource->_output
			);
		}

		// Process images
		if ($modx->getOption(\'minifyx_process_images\', null, false, true)) {
			if (!$modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {return false;}

			$connector = $modx->getOption(\'minifyx_connector\', null, \'/assets/components/minifyx/munee.php\', true);
			$exclude = $modx->getOption(\'minifyx_exclude_images\');
			$replace = array(\'from\' => array(), \'to\' => array());
			$site_url = $modx->getOption(\'site_url\');
			$default = $modx->getOption(\'minifyx_images_filters\', null, \'\', true);

			preg_match_all(\'/<img.*?>/i\', $modx->resource->_output, $tags);
			foreach ($tags[0] as $tag) {
				if (preg_match($exclude, $tag)) {
					continue;
				}
				elseif (preg_match_all(\'/(src|height|width|filters)=[\\\'|"](.*?)[\\\'|"]/i\', $tag, $properties)) {
					if (count($properties[0]) >= 2) {
						$file = $connector . \'?files=\';
						$resize = \'\';
						$filters = \'\';
						$tmp = array(\'from\' => array(), \'to\' => array());

						foreach ($properties[1] as $k => $v) {
							if ($v == \'src\') {
								$src = $properties[2][$k];
								if (strpos($src, \'://\') !== false) {
									if (strpos($src, $site_url) !== false) {
										$src = str_replace($site_url, \'\', $src);
									}
									else {
										// Image from 3rd party domain
										continue;
									}
								}
								$file .= $src;
								$tmp[\'from\'][\'src\'] = $properties[2][$k];
							}
							elseif ($v == \'height\' || $v == \'width\') {
								$resize .=  $v[0] . \'[\'.$properties[2][$k].\']\';
							}
							elseif ($v == \'filters\') {
								$filters .= $properties[2][$k];
								$tmp[\'from\'][\'filters\'] = $properties[0][$k];
								$tmp[\'to\'][\'filters\'] = \'\';
							}
						}

						if (!empty($tmp[\'from\'][\'src\'])) {
							$resize .= isset($tmp[\'from\'][\'filters\'])
								? $filters
								: $default;
							$tmp[\'to\'][\'src\'] = $file . \'?resize=\' . $resize;

							ksort($tmp[\'from\']);
							ksort($tmp[\'to\']);

							$replace[\'from\'][] = $tag;
							$replace[\'to\'][] = str_replace($tmp[\'from\'], $tmp[\'to\'], $tag);
						}
					}
				}
			}

			if (!empty($replace)) {
				$modx->resource->_output = str_replace(
					$replace[\'from\'],
					$replace[\'to\'],
					$modx->resource->_output
				);
			}
		}

		$modx->log(modX::LOG_LEVEL_INFO, \'[MinifyX] Total time for page "\'.$modx->resource->id.\'" = \'.(microtime(true) - $time));
		break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/minifyx/elements/plugins/plugin.minifyx.php',
    ),
    17 => 
    array (
      'id' => '17',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'miniShop2',
      'description' => '',
      'editor_type' => '0',
      'category' => '15',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        // Load extensions
        /** @var miniShop2 $miniShop2 */
        if ($miniShop2 = $modx->getService(\'miniShop2\')) {
            $miniShop2->loadMap();
        }
        break;

    case \'OnHandleRequest\':
        // Handle ajax requests
        $isAjax = !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
        if (empty($_REQUEST[\'ms2_action\']) || !$isAjax) {
            return;
        }
        /** @var miniShop2 $miniShop2 */
        if ($miniShop2 = $modx->getService(\'miniShop2\')) {
            $response = $miniShop2->handleRequest($_REQUEST[\'ms2_action\'], @$_POST);
            @session_write_close();
            exit($response);
        }
        break;

    case \'OnLoadWebDocument\':
        // Handle non-ajax requests
        if (!empty($_REQUEST[\'ms2_action\'])) {
            if ($miniShop2 = $modx->getService(\'miniShop2\')) {
                $miniShop2->handleRequest($_REQUEST[\'ms2_action\'], @$_POST);
            }
        }
        // Set product fields as [[*resource]] tags
        if ($modx->resource->get(\'class_key\') == \'msProduct\') {
            if ($dataMeta = $modx->getFieldMeta(\'msProductData\')) {
                unset($dataMeta[\'id\']);
                $modx->resource->_fieldMeta = array_merge(
                    $modx->resource->_fieldMeta,
                    $dataMeta
                );
            }
        }
        break;

    case \'OnWebPageInit\':
        // Set referrer cookie
        /** @var msCustomerProfile $profile */
        $referrerVar = $modx->getOption(\'ms2_referrer_code_var\', null, \'msfrom\', true);
        $cookieVar = $modx->getOption(\'ms2_referrer_cookie_var\', null, \'msreferrer\', true);
        $cookieTime = $modx->getOption(\'ms2_referrer_time\', null, 86400 * 365, true);

        if (!$modx->user->isAuthenticated() && !empty($_REQUEST[$referrerVar])) {
            $code = trim($_REQUEST[$referrerVar]);
            if ($profile = $modx->getObject(\'msCustomerProfile\', array(\'referrer_code\' => $code))) {
                $referrer = $profile->get(\'id\');
                setcookie($cookieVar, $referrer, time() + $cookieTime);
            }
        }
        break;

    case \'OnUserSave\':
        // Save referrer id
        if ($mode == modSystemEvent::MODE_NEW) {
            /** @var modUser $user */
            $cookieVar = $modx->getOption(\'ms2_referrer_cookie_var\', null, \'msreferrer\', true);
            $cookieTime = $modx->getOption(\'ms2_referrer_time\', null, 86400 * 365, true);
            if ($modx->context->key != \'mgr\' && !empty($_COOKIE[$cookieVar])) {
                if ($profile = $modx->getObject(\'msCustomerProfile\', $user->get(\'id\'))) {
                    if (!$profile->get(\'referrer_id\') && $_COOKIE[$cookieVar] != $user->get(\'id\')) {
                        $profile->set(\'referrer_id\', (int)$_COOKIE[$cookieVar]);
                        $profile->save();
                    }
                }
                setcookie($cookieVar, \'\', time() - $cookieTime);
            }
        }
        break;

    case \'msOnChangeOrderStatus\':
        // Update customer stat
        if (empty($status) || $status != 2) {
            return;
        }

        /** @var modUser $user */
        if ($user = $order->getOne(\'User\')) {
            $q = $modx->newQuery(\'msOrder\', array(\'type\' => 0));
            $q->innerJoin(\'modUser\', \'modUser\', array(\'modUser.id = msOrder.user_id\'));
            $q->innerJoin(\'msOrderLog\', \'msOrderLog\', array(
                \'msOrderLog.order_id = msOrder.id\',
                \'msOrderLog.action\' => \'status\',
                \'msOrderLog.entry\' => $status,
            ));
            $q->where(array(\'msOrder.user_id\' => $user->get(\'id\')));
            $q->groupby(\'msOrder.user_id\');
            $q->select(\'SUM(msOrder.cost)\');
            if ($q->prepare() && $q->stmt->execute()) {
                $spent = $q->stmt->fetchColumn();
                /** @var msCustomerProfile $profile */
                if ($profile = $modx->getObject(\'msCustomerProfile\', $user->get(\'id\'))) {
                    $profile->set(\'spent\', $spent);
                    $profile->save();
                }
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/minishop2/elements/plugins/plugin.minishop2.php',
    ),
    18 => 
    array (
      'id' => '18',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'Tickets',
      'description' => '',
      'editor_type' => '0',
      'category' => '16',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnSiteRefresh\':
        if ($modx->cacheManager->refresh(array(\'default/tickets\' => array()))) {
            $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': Tickets\');
        }
        break;

    case \'OnDocFormSave\':
        /** @var Ticket $resource */
        if ($mode == \'new\' && $resource->class_key == "Ticket") {
            $modx->cacheManager->delete(\'tickets/latest.tickets\');
        }
        break;

    case \'OnWebPagePrerender\':
        $output = &$modx->resource->_output;
        $output = str_replace(
            array(\'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
            array(\'[\', \']\', \'{\', \'}\'),
            $output
        );
        break;

    case \'OnPageNotFound\':
        // It is working only with friendly urls enabled
        $q = trim(@$_REQUEST[$modx->context->getOption(\'request_param_alias\', \'q\')]);
        $matches = explode(\'/\', rtrim($q, \'/\'));
        if (count($matches) < 2) {
            return;
        }

        $ticket_uri = array_pop($matches);
        $section_uri = implode(\'/\', $matches) . \'/\';

        if ($section_id = $modx->findResource($section_uri)) {
            /** @var TicketsSection $section */
            if ($section = $modx->getObject(\'TicketsSection\', $section_id)) {
                if (is_numeric($ticket_uri)) {
                    $ticket_id = $ticket_uri;
                } elseif (preg_match(\'#^\\d+#\', $ticket_uri, $tmp)) {
                    $ticket_id = $tmp[0];
                } else {
                    $properties = $section->getProperties(\'tickets\');
                    if (!empty($properties[\'uri\']) && strpos($properties[\'uri\'], \'%id\') !== false) {
                        $pcre = str_replace(\'%id\', \'([0-9]+)\', $properties[\'uri\']);
                        $pcre = preg_replace(\'#(\\%[a-z]+)#\', \'(?:.*?)\', $pcre);
                        if (@preg_match(\'#\' . trim($pcre, \'/\') . \'#\', $ticket_uri, $matches)) {
                            $ticket_id = $matches[1];
                        }
                    }
                }
                if (!empty($ticket_id)) {
                    if ($ticket = $modx->getObject(\'Ticket\', array(\'id\' => $ticket_id, \'deleted\' => 0))) {
                        if ($ticket->published) {
                            $modx->sendRedirect($modx->makeUrl($ticket_id),
                                array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
                        } elseif ($unp_id = $modx->getOption(\'tickets.unpublished_ticket_page\')) {
                            $modx->sendForward($unp_id);
                        }
                    }
                }
            }
        }
        break;

    case \'OnLoadWebDocument\':
        $authenticated = $modx->user->isAuthenticated($modx->context->get(\'key\'));
        $key = \'Tickets_User\';

        if (!$authenticated && !$modx->getOption(\'tickets.count_guests\')) {
            return;
        }

        if (empty($_COOKIE[$key])) {
            if (!empty($_SESSION[$key])) {
                $guest_key = $_SESSION[$key];
            } else {
                $guest_key = $_SESSION[$key] = md5(rand() . time() . rand());
            }
            setcookie($key, $guest_key, time() + (86400 * 365), \'/\');
        } else {
            $guest_key = $_COOKIE[$key];
        }

        if (empty($_SESSION[$key])) {
            $_SESSION[$key] = $guest_key;
        }

        if ($authenticated) {
            /** @var TicketAuthor $profile */
            if (!$profile = $modx->user->getOne(\'AuthorProfile\')) {
                $profile = $modx->newObject(\'TicketAuthor\');
                $modx->user->addOne($profile);
            }
            $profile->set(\'visitedon\', time());
            $profile->save();
        }
        break;

    case \'OnWebPageComplete\':
        /** @var Tickets $Tickets */
        $Tickets = $modx->getService(\'tickets\');
        $Tickets->logView($modx->resource->get(\'id\'));
        break;

    case \'OnUserSave\':
        /** @var modUser $user */
        if ($mode == \'new\' && $user && !$user->getOne(\'AuthorProfile\')) {
            $profile = $modx->newObject(\'TicketAuthor\');
            $user->addOne($profile);
            $profile->save();
        }
        break;

}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/tickets/elements/plugins/plugin.tickets.php',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'mgr' => 
      array (
        0 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_unpack' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 1,
          'authority' => 9999,
          'policy' => 
          array (
          ),
        ),
        2 => 
        array (
          'principal' => 1,
          'authority' => 9999,
          'policy' => 
          array (
            'mscategory_save' => true,
            'msproduct_save' => true,
            'msproduct_publish' => true,
            'msproduct_delete' => true,
            'msorder_save' => true,
            'msorder_view' => true,
            'msorder_list' => true,
            'mssetting_save' => true,
            'mssetting_view' => true,
            'mssetting_list' => true,
            'msproductfile_save' => true,
            'msproductfile_generate' => true,
            'msproductfile_list' => true,
          ),
        ),
      ),
    ),
  ),
);