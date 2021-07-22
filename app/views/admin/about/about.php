
<?php 
use Core\FH;
use Core\H;
// H::dnd($this->postAction);
?>


<?php $this->setSiteTitle('Admin Panel -> Two Hearts Of Love - Deliverace Ministry'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<section class="uk-section uk-section-xsmall uk-dark">
    <div class="section-heading uk-margin-bottom">
        <div class="uk-container">
            <h2 class="uk-heading-bullet"><span class="txt-grad3">About This Organisation</h2>  
        </div>
    </div>
    <div class="section-body">
        <div class="uk-container">
            <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                <div class="" id="editor">
                    <div class="uk-button-group uk-margin-small-top uk-margin-small-left">
                        <button  class="uk-button uk-button-small" onclick="execCmd('bold');"><i class="fas fa-bold"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('italic');"><i class="fas fa-italic"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('underline');"><i class="fas fa-underline"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('strikeThrough');"><i class="fas fa-strikethrough"></i></button>
                    </div>
                    <div class="uk-button-group uk-margin-small-top uk-margin-small-left">
                        <button  class="uk-button uk-button-small" onclick="execCmd('justifyLeft');"><i class="fas fa-align-left"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('justifycenter');"><i class="fas fa-align-center"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('justifyright');"><i class="fas fa-align-right"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('justifyfull');"><i class="fas fa-align-justify"></i></button>
                    </div>
                    <div class="uk-button-group uk-margin-small-top uk-margin-small-left">
                        <button  class="uk-button uk-button-small" onclick="execCmd('cut');"><i class="fas fa-cut"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('copy');"><i class="fas fa-copy"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('paste');"><i class="fas fa-paste"></i></button>
                    </div>
                    <div class="uk-button-group uk-margin-small-top uk-margin-small-left">
                        <button  class="uk-button uk-button-small" onclick="execCmd('indent');"><i class="fas fa-indent"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('outdent');"><i class="fas fa-outdent"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('insertParagraph');"><i class="fas fa-paragraph"></i></button>
                    </div>
                    <div class="uk-button-group uk-margin-small-top uk-margin-small-left">
                        <button  class="uk-button uk-button-small" onclick="execCmd('subscript');"><i class="fas fa-subscript"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('superscript');"><i class="fas fa-superscript"></i></button>
                    </div>
                    <div class="uk-button-group uk-margin-small-top uk-margin-small-left">
                        <button  class="uk-button uk-button-small" onclick="execCmd('undo');"><i class="fas fa-undo"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('redo');"><i class="fas fa-redo"></i></button>
                    </div>
                    <div class="uk-button-group uk-margin-small-top uk-margin-small-left">
                        <button  class="uk-button uk-button-small" onclick="execCmd('insertUnorderedList');"><i class="fas fa-list-ul"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('insertorderedlist');"><i class="fas fa-list-ol"></i></button>
                    </div>
                    <select class="uk-select uk-width-auto uk-margin-small-left uk-margin-small-top" onchange="execCommandWithArg('formatBlock', this.value);">
                        <option value="H1">H1</option>
                        <option value="H2">H2</option>
                        <option value="H3">H3</option>
                        <option value="H4">H4</option>
                        <option value="H5">H5</option>
                        <option value="H6">H6</option>
                    </select>
                    <div class="uk-button-group uk-margin-small-top uk-margin-small-left">
                        <button  class="uk-button uk-button-small" onclick="execCmd('insertHorizontalRule');">HR</button>
                        <button  class="uk-button uk-button-small" onclick="execCommandWithArg('createLink', prompt('Enter a Url', 'http:\/\/'));"><i class="fas fa-link"></i></button>
                        <button  class="uk-button uk-button-small" onclick="execCmd('unlink');"><i class="fas fa-unlink"></i></button>
                        <button  class="uk-button uk-button-small" onclick="toggleSource();"><i class="fas fa-code"></i></button>
                        <button  class="uk-button uk-button-small" onclick="toggleEdit();">Toggle Edit</button>
                    </div>
                    <br>
                    <select name="" id="" class="uk-select uk-width-small uk-margin-small-left uk-margin-small-top" onchange="execCommandWithArg('fontName', this.value);">
                        <option value="Arial">Arial</option>
                        <option value="Comic Sans MS">Comic Sans MS</option>
                        <option value="Courier">Courier</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Tahoma">Tahoma</option>
                        <option value="Times New Roman">Times New Roman</option>
                        <option value="Verdana">Verdana</option>
                    </select>
                    <select name="" id="" uk-tooltip="Font Size" class="uk-select uk-width-small uk-margin-small-left uk-margin-small-top" onchange="execCommandWithArg('fontSize', this.value);">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    Fore Color: <input type="color" name="cedit_color" id="cedit_color" onchange="execCommandWithArg('foreColor', this.value);">
                    Background: <input type="color" name="bedit_color" id="bedit_color" onchange="execCommandWithArg('hiliteColor', this.value);">
                    <button  class="uk-button uk-button-small" onclick="execCommandWithArg('insertImage', prompt('Enter The Image URL', ''));"><i class="fas fa-file-image"></i></button>
                    <button  class="uk-button uk-button-small" onclick="execCmd('selectAll');">Select All</button>
                </div>
                <div class="">
                    <iframe id="richTextField" name="richTextField" style="min-height: 400px;" frameborder="0" uk-responsive></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <hr class="pr__vr__section"> -->


<?php $this->end(); ?>

<?php $this->start('foot'); ?>
<script>
    $(document).ready(function(){
        enableEditMode();
    });
    var showingSourceCode = false;
    var isInEditMode = true;
    function enableEditMode(){
        //alert('it did');
        richTextField.document.designMode = "On";
    }

    function execCmd(cmd) {
        richTextField.document.execCommand(cmd,false,null);
    }
    function execCommandWithArg(command, arg){
        richTextField.document.execCommand(command, false, arg);
    }
    function toggleSource(){
        if(showingSourceCode){
            richTextField.document.getElementByTagName('body')[0].innerHTML = richTextField.document.getElementByTagName('body')[0].textContent;
            showingSourceCode = false;
        }else{
            richTextField.document.getElementByTagName('body')[0].textContent = richTextField.document.getElementByTagName('body')[0].innerHTML;
            showingSourceCode = true;
        }
    }
    function toggleEdit(){
        if(isInEditMode){
            richTextField.document.designMode = "Off";
            isInEditMode = false;
        }else{
            richTextField.document.designMode = "On";
            isInEditMode = true;
        }
    }
    function insertHTML(IMG) {
        var id = "rand"+Math.random();
        var doc = document.getElementById("editor");
        doc = doc.document ? doc.document : doc.contentWindow.document;
        img = "<img src='" +img+ "' id=" +id+ ">";
        if (document.all) {
            var range = doc.selection.createRange();
            range.pasteHTML(img);
            range.collapse(false);
            range.select();
        }else{
            doc.execCommand("insertHTML", false, img);
        }
        return doc.getElementById(id);
    }
</script>
<?php $this->end(); ?>