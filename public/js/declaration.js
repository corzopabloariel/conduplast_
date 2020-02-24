/**
 * ----------------------------------------
 *              CONSIDERACIONES
 * ---------------------------------------- */
/**
 * Las entidades nombradas a continuación tienen referencia con una tabla de la BASE DE DATOS.
 * Respetar el nombre de las columnas
 *
 * @version 2
 */
const ENTIDADES = {
    slider: {
        //TABLE: "sliders",
        ATRIBUTOS: {
            order:      {TIPO:"TP_STRING",LABEL:1,MAXLENGTH:3,VISIBILIDAD:"TP_VISIBLE",CLASS:"text-uppercase text-center border-left-0 border-right-0 border-top-0 rounded-0",WIDTH:"70px",NOMBRE:"orden"},
            image:      {TIPO:"TP_IMAGE",FOLDER:"sliders",NECESARIO:1,VALID:"Archivo seleccionado",INVALID:"Archivo - 1350px X 400px",BROWSER:"",VISIBILIDAD:"TP_VISIBLE",ACCEPT:"image/*,video/mp4,video/x-m4v,video/*",NOMBRE:"imagen",WIDTH:"1350px", TABLE: "400px"},
            section:    {TIPO:"TP_STRING",VISIBILIDAD:"TP_INVISIBLE",NOMBRE:"sección"},
            text:    {TIPO:"TP_TEXT",EDITOR:1,VISIBILIDAD:"TP_VISIBLE",FIELDSET:1,NOMBRE:"texto"}
        },
        FORM: [
            {
                '/section/<div class="col-12">/image/</div>':['section','image']
            },
            {
                '<div class="col-12 col-md-9">/text/</div><div class="col-12 col-md-3">/order/</div>':['order','text']
            },
        ],
        FUNCIONES: {
            image: {onchange:{F:"readURL(this,'/id/')",C:"id"}}
        },
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                    { name: 'forms', groups: [ 'forms' ] },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                    { name: 'links', groups: [ 'links' ] },
                    { name: 'insert', groups: [ 'insert' ] },
                    { name: 'styles', groups: [ 'styles' ] },
                    { name: 'colors', groups: [ 'colors' ] },
                    { name: 'tools', groups: [ 'tools' ] },
                    { name: 'others', groups: [ 'others' ] },
                    { name: 'about', groups: [ 'about' ] }
                ],
                colorButton_colors : colorPick,
                removeButtons: 'Save,Templates,Print,Cut,Find,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Font,Maximize,ShowBlocks,About,FontSize,Format,NewPage,Preview,Replace,Copy,PasteFromWord',
                height: "150px"
            }
        }
    },
    contenido_p1_elemento_1: {
        ATRIBUTOS: {
            image: { TIPO: "TP_IMAGE", NECESARIO: 1, VALID: "Archivo seleccionado", INVALID: "Archivo - 671px X 319px", BROWSER: "", VISIBILIDAD: "TP_VISIBLE", ACCEPT: "image/*", NOMBRE: "ícono", WIDTH: "671px", HEIGHT: "319px" },
            text: { TIPO: "TP_TEXT", VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "título", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" },
        },

        FORM: [
            {
                '<div class="col-12 col-md-5">/text/</div><div class="col-12 col-md-7">/image/</div>': ['text','image']
            },
        ],
        FUNCIONES: {
            image: { onchange: { F: "readURL(this,'/id/')", C: "id" } }
        },
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,Templates,Print,Cut,Find,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Font,Maximize,ShowBlocks,About,NewPage,Preview,Replace,Copy,PasteFromWord',
                height: '300px'
            },
        }
    },
    contenido_p1_elemento_2: {
        ATRIBUTOS: {
            image: { TIPO: "TP_IMAGE", NECESARIO: 1, VALID: "Archivo seleccionado", INVALID: "Archivo - 1350px X 400px", BROWSER: "", VISIBILIDAD: "TP_VISIBLE", ACCEPT: "image/*", NOMBRE: "ícono", WIDTH: "1350px", HEIGHT: "400px" },
            text: { TIPO: "TP_TEXT", VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "título", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" },
            btn: { TIPO: "TP_STRING", MAXLENGTH: 200, NECESARIO: 1, LABEL: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "título del botón", CLASS: "border-left-0 border-right-0 border-top-0 rounded-0" },
            btn_link: { TIPO: "TP_STRING", MAXLENGTH: 200, NECESARIO: 1, LABEL: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "Link del botón", CLASS: "border-left-0 border-right-0 border-top-0 rounded-0" },
        },

        FORM: [
            {
                '<div class="col-12">/image/</div>': ['image']
            },
            {
                '<div class="col-12">/text/</div>': ['text']
            },
            {
                '<div class="col-12 col-md">/btn/</div><div class="col-12 col-md">/btn_link/</div>': ['btn','btn_link']
            },
        ],
        FUNCIONES: {
            image: { onchange: { F: "readURL(this,'/id/')", C: "id" } }
        },
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,Templates,Print,Cut,Find,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Font,Maximize,ShowBlocks,About,NewPage,Preview,Replace,Copy,PasteFromWord',
                height: '300px'
            },
        }
    },
    contenido_p2_elemento_1: {
        ATRIBUTOS: {
            image: { TIPO: "TP_IMAGE", NECESARIO: 1, VALID: "Archivo seleccionado", INVALID: "Archivo - 361px X 417px", BROWSER: "", VISIBILIDAD: "TP_VISIBLE", ACCEPT: "image/*", NOMBRE: "ícono", WIDTH: "361px", HEIGHT: "417px" },
            text: { TIPO: "TP_TEXT", VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "título", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" },
        },

        FORM: [
            {
                '<div class="col-12 col-md-5">/image/</div><div class="col-12 col-md-7">/text/</div>': ['text', 'image']
            },
        ],
        FUNCIONES: {
            image: { onchange: { F: "readURL(this,'/id/')", C: "id" } }
        },
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Image,Flash,Table,Smiley,HorizontalRule,SpecialChar,PageBreak,Iframe,Styles,Font,Maximize,ShowBlocks,About',
                height: '300px'
            },
        }
    },
    contenido_p2_elemento_2: {
        ATRIBUTOS: {
            order: { TIPO: "TP_ENTERO", MAXLENGTH: 2, NECESARIO: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "año", CLASS: "border-left-0 border-right-0 bg-transparent border-top-0 rounded-0", SIMPLE: 1 },
            text: { TIPO: "TP_TEXT", VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "título", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" },
            image: { TIPO: "TP_IMAGE", NECESARIO: 1, VALID: "Archivo seleccionado", INVALID: "Archivo - 389px X 296px", BROWSER: "", VISIBILIDAD: "TP_VISIBLE", ACCEPT: "image/*", NOMBRE: "ícono", HEIGHT: "296px" },
        },
        FUNCIONES: {
            image: { onchange: { F: "readURL(this,'/id/')", C: "id" } }
        },
        FORM: [
            {
                '<div class="col-12 col-md-4">/order/</div>': ['order']
            },
            {
                '<div class="col-12">/text/</div>': ['text']
            },
            {
                '<div class="col-12">/image/</div>': ['image']
            },
        ],
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Font,Maximize,ShowBlocks,About,Styles',
                height: '170px'
            },
        }
    },
    contenido_p6_elemento_1: {
        ATRIBUTOS: {
            image: { TIPO: "TP_IMAGE", NECESARIO: 1, VALID: "Archivo seleccionado", INVALID: "Archivo - 571px X 374px", BROWSER: "", VISIBILIDAD: "TP_VISIBLE", ACCEPT: "image/*", NOMBRE: "ícono", WIDTH: "571px", HEIGHT: "374px" },
            text: { TIPO: "TP_TEXT", VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "título", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" },
        },

        FORM: [
            {
                '<div class="col-12 col-md-6">/text/</div><div class="col-12 col-md-6">/image/</div>': ['text', 'image']
            },
        ],
        FUNCIONES: {
            image: { onchange: { F: "readURL(this,'/id/')", C: "id" } }
        },
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Image,Flash,Table,Smiley,HorizontalRule,SpecialChar,PageBreak,Iframe,Styles,Font,Maximize,ShowBlocks,About',
                height: '300px'
            },
        }
    },
    contenido_p4_elemento_1: {
        ATRIBUTOS: {
            order: { TIPO: "TP_ENTERO", MAXLENGTH: 2, NECESARIO: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "orden", CLASS: "border-left-0 border-right-0 bg-transparent border-top-0 rounded-0", SIMPLE: 1 },
            title: { TIPO: "TP_STRING", FOLDER: "informacion_tecnica", MAXLENGTH: 200, NECESARIO: 1, LABEL: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "título", CLASS: "border-left-0 bg-transparent border-right-0 border-top-0 rounded-0" },
            text: { TIPO: "TP_TEXT", VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "título", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" },
            image: { TIPO: "TP_IMAGE", NECESARIO: 1, VALID: "Archivo seleccionado", INVALID: "Archivo - 447px X 210px", BROWSER: "", VISIBILIDAD: "TP_VISIBLE", ACCEPT: "image/*", NOMBRE: "imagen", WIDTH: "447px", HEIGHT: "210px" },
            icon: { TIPO: "TP_IMAGE", NECESARIO: 1, VALID: "Archivo seleccionado", INVALID: "Archivo - 67px X 67px", BROWSER: "", VISIBILIDAD: "TP_VISIBLE", ACCEPT: "image/*", NOMBRE: "imagen", WIDTH: "67px", HEIGHT: "67px" }
        },
        FUNCIONES: {
            image: { onchange: { F: "readURL(this,'/id/')", C: "id" } },
            icon: { onchange: { F: "readURL(this,'/id/')", C: "id" } }
        },
        FORM: [
            {
                '<div class="col-12 col-md-6">/order/</div>': ['order']
            },
            {
                '<div class="col-12">/title/</div>': ['title']
            },
            {
                '<div class="col-12 col-md-8">/image/</div><div class="col-12 col-md">/icon/</div>': ['image','icon']
            },
            {
                '<div class="col-12">/text/</div>': ['text']
            },
        ],
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Font,Maximize,ShowBlocks,About,Styles',
                height: '170px'
            },
        }
    },
    contenido_p6_elemento_2: {
        ATRIBUTOS: {
            order: { TIPO: "TP_ENTERO", MAXLENGTH: 2, NECESARIO: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "orden", CLASS: "border-left-0 border-right-0 bg-transparent border-top-0 rounded-0", SIMPLE: 1 },
            title: { TIPO: "TP_STRING", FOLDER: "informacion_tecnica", MAXLENGTH: 200, NECESARIO: 1, LABEL: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "título", CLASS: "border-left-0 bg-transparent border-right-0 border-top-0 rounded-0" },
            file: { TIPO: "TP_FILE", NECESARIO: 1, VALID: "seleccionado", INVALID: "Ext: JPG y PDF", BROWSER: "Buscar", VISIBILIDAD: "TP_VISIBLE", ACCEPT: "image/jpeg,application/pdf", NOMBRE: "Ficha", SIMPLE: 1 },
        },
        FUNCIONES: {
            image: { onchange: { F: "readURL(this,'/id/')", C: "id" } }
        },
        FORM: [
            {
                '<div class="col-12 col-md-6">/order/</div>': ['order']
            },
            {
                '<div class="col-12">/title/</div>': ['title']
            },
            {
                '<div class="col-12">/file/</div>': ['file']
            },
        ],
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Font,Maximize,ShowBlocks,About,Styles',
                height: '170px'
            },
        }
    },
    sector: {
        TABLE: "sectores",
        ATRIBUTOS: {
            order: { TIPO: "TP_STRING", LABEL: 1, MAXLENGTH: 3, VISIBILIDAD: "TP_VISIBLE", CLASS: "text-uppercase text-center border-left-0 border-right-0 border-top-0 rounded-0", WIDTH: "70px", NOMBRE: "orden" },
            title: { TIPO: "TP_STRING", MAXLENGTH: 200, NECESARIO: 1, LABEL: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "título", CLASS: "border-left-0 border-right-0 border-top-0 rounded-0" },
            images: { TIPO: "TP_ARRAY", COLUMN: "images", VISIBILIDAD: "TP_VISIBLE_TABLE", NOMBRE: "imágenes", CLASS: "text-center" },
            productos_id: { TIPO: "TP_ENUM", CLASS: "selectpicker", VISIBILIDAD: "TP_VISIBLE_FORM", MULTIPLE: 1, ENUMOP: "productos", NOMBRE: "productos", LABEL: 1 },
            text: { TIPO: "TP_STRING", VISIBILIDAD: "TP_VISIBLE_FORM", FIELDSET: 1, NOMBRE: "descripción", CLASS: "border-left-0 bg-transparent border-right-0 border-top-0 rounded-0" }
        },
        FORM: [
            {
                '<div class="col-12" id="sector-images-container"></div>': ['VACIO']
            },
            {
                '<div class="col-12 col-md-4">/order/</div><div class="col-12 col-md-8">/title/</div>': ['order','title']
            },
            {
                '<div class="col-12">/productos_id/</div>': ['productos_id']
            },
            {
                '<div class="col-12">/text/</div>': ['text']
            }
        ],
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,BGColor,Maximize,ShowBlocks,Styles,Font,About',
                height: '170px'
            },
        }
    },
//in_home: {TIPO:"TP_CHECK",VISIBILIDAD:"TP_VISIBLE",CHECK:"¿Mostrar ícono en la HOME?",NOMBRE:"en home",OPTION:{ "" : "NO" , true : "Si"}}
    categoria: {
        TABLE: "categorias",
        ATRIBUTOS: {
            order: {TIPO:"TP_STRING",LABEL:1,MAXLENGTH:3,VISIBILIDAD:"TP_VISIBLE",CLASS:"text-uppercase text-center border-left-0 border-right-0 border-top-0 rounded-0",WIDTH:"70px",NOMBRE:"orden"},
            image: {TIPO:"TP_IMAGE",NECESARIO:1,VALID:"Archivo seleccionado",INVALID:"Archivo - 268px X 268px",BROWSER:"",VISIBILIDAD:"TP_VISIBLE",ACCEPT:"image/*",NOMBRE:"imagen",WIDTH:"268px", HEIGHT: "268px"},
            text: { TIPO: "TP_STRING", VISIBILIDAD: "TP_VISIBLE", NOMBRE: "título", CLASS: "border-left-0 bg-transparent border-right-0 border-top-0 rounded-0" },
            resume: { TIPO: "TP_TEXT", VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "resumen", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" }

        },
        FORM: [
            {
                '<div class="col-12 col-md-5">/image/</div><div class="col-12 col-md-7"><div class="row"><div class="col-12 col-md-6">/order/</div><div class="col-12 mt-5">/text/</div></div></div>':['image','order','text']
            },
            {
                '<div class="col-12">/resume/</div>' : [ 'resume' ]
            }
        ],
        FUNCIONES: {
            image: {onchange:{F:"readURL(this,'/id/')",C:"id"}}
        },
        EDITOR: {
            resume: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,BGColor,Maximize,ShowBlocks,Styles,Font,About',
                height: '100px'
            },
        }
    },

    producto: {
        TABLE: "productos",
        ATRIBUTOS: {
            order: { TIPO: "TP_STRING", LABEL: 1, MAXLENGTH: 3, VISIBILIDAD: "TP_VISIBLE", CLASS: "text-uppercase text-center border-left-0 border-right-0 border-top-0 rounded-0", WIDTH: "70px", NOMBRE: "orden" },
            images: { TIPO: "TP_ARRAY", COLUMN: "images", VISIBILIDAD: "TP_VISIBLE_TABLE", NOMBRE: "imágenes", CLASS: "text-center" },
            text: { TIPO: "TP_STRING", LABEL: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "título", CLASS: "border-left-0 bg-transparent border-right-0 border-top-0 rounded-0" },
            details: { TIPO: "TP_TEXT", FIELDSET: 1, VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "detalles", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" },
            resume: { TIPO: "TP_TEXT", FIELDSET: 1, VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "resumen", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" },
            ficha: { TIPO: "TP_FILE", NECESARIO: 1, VALID: "seleccionado", INVALID: "Ext: JPG y PDF", BROWSER: "Buscar", VISIBILIDAD: "TP_VISIBLE", ACCEPT: "image/jpeg,application/pdf", NOMBRE: "Ficha", SIMPLE: 1 },
            mercadolibre: { TIPO: "TP_STRING", MAXLENGTH: 200, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "link de ML", CLASS: "border-left-0 bg-transparent border-right-0 border-top-0 rounded-0" },
            categoria_id: { TIPO: "TP_ENUM", CLASS: "selectpicker", VISIBILIDAD: "TP_VISIBLE", ENUMOP: "categorias", NOMBRE: "categoria", LABEL: 1 },
        },
        FORM: [
            {
                '<div class="col-12" id="producto-images-container"></div>': ['VACIO']
            },
            {
                '<div class="col-12">/categoria_id/</div>': ['categoria_id']
            },
            {
                '<div class="col-12 col-md-4">/order/</div><div class="col-12 col-md">/text/</div>': ['order','text']
            },
            {
                '<div class="col-12">/resume/</div>': ['resume']
            },
            {
                '<div class="col-12">/details/</div>': ['details']
            },
            {
                '<div class="col-12"><fieldset class="p-3 border" id="producto-features-container"><legend class="border-bottom">Sector 1</legend></fieldset></div>': ['VACIO']
            },
            {
                '<div class="col-12"><fieldset class="p-3 border" id="producto-models-container"><legend class="border-bottom">Sector 2</legend></fieldset></div>': ['VACIO']
            },
            {
                '<div class="col-12 col-md">/ficha/</div><div class="col-12 col-md">/mercadolibre/</div>': ['ficha','mercadolibre']
            }
        ],
        FUNCIONES: {
            image: { onchange: { F: "readURL(this,'/id/')", C: "id" } }
        },
        EDITOR: {
            resume: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,BGColor,Maximize,ShowBlocks,Styles,Font,About',
                height: '70px'
            },
            details: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,BGColor,Maximize,ShowBlocks,Styles,Font,About',
                height: '170px'
            },
        }
    },
    producto_features: {
        ATRIBUTOS: {
            title: { TIPO: "TP_STRING", LABEL: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "título sector", CLASS: "border-left-0 bg-transparent border-right-0 border-top-0 rounded-0" },
            features: { TIPO: "TP_TEXT", VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "resumen", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" },
        },
        FORM: [
            {
                '<div class="col-12">/title/</div>': ['title']
            },
            {
                '<div class="col-12">/features/</div>': ['features']
            }
        ],
        EDITOR: {
            features: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Font,Maximize,ShowBlocks,About,Styles',
                height: '170px'
            },
        }
    },
    producto_models: {
        ATRIBUTOS: {
            title: { TIPO: "TP_STRING", LABEL: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "título sector", CLASS: "border-left-0 bg-transparent border-right-0 border-top-0 rounded-0" },
            models: { TIPO: "TP_TEXT", VISIBILIDAD: "TP_VISIBLE_FORM", NOMBRE: "resumen", CLASS: "border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0" },
        },
        FORM: [
            {
                '<div class="col-12">/title/</div>': ['title']
            },
            {
                '<div class="col-12">/models/</div>': ['models']
            }
        ],
        EDITOR: {
            models: {
                toolbarGroups: [
                    { name: 'document', groups: ['mode', 'document', 'doctools'] },
                    { name: 'clipboard', groups: ['clipboard', 'undo'] },
                    { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
                    { name: 'forms', groups: ['forms'] },
                    { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                    { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
                    { name: 'links', groups: ['links'] },
                    { name: 'insert', groups: ['insert'] },
                    { name: 'styles', groups: ['styles'] },
                    { name: 'colors', groups: ['colors'] },
                    { name: 'tools', groups: ['tools'] },
                    { name: 'others', groups: ['others'] },
                    { name: 'about', groups: ['about'] }
                ],
                colorButton_colors: colorPick,
                removeButtons: 'Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Font,Maximize,ShowBlocks,About,Styles',
                height: '170px'
            },
        }
    },

    contenido_empresa_anio: {
        ATRIBUTOS: {
            order: {TIPO:"TP_ENTERO",MAXLENGTH:2,NECESARIO:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"Año",CLASS:"border-left-0 border-right-0 bg-transparent border-top-0 rounded-0",SIMPLE:1},
            text: {TIPO:"TP_TEXT",VISIBILIDAD:"TP_VISIBLE_FORM",NOMBRE:"título",CLASS:"border-left-0 text-center bg-transparent border-right-0 border-top-0 rounded-0"}
        },

        FORM: [
            {
                '<div class="col-12">/order/</div>':['order']
            },
            {
                '<div class="col-12">/text/</div>':['text']
            },
        ],
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups : [ 'mode' , 'document' , 'doctools' ] },
                    { name: "basicstyles", groups: ["basicstyles"] },
                    { name: 'colors', groups: [ 'TextColor', 'BGColor' ] },
                ],
                colorButton_colors : colorPick,
                removeButtons: 'CreateDiv,Styles,Font,Language,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Save,NewPage,Print,Preview,Templates',
                height: '170px'
            }
        }
    },


    producto_images: {
        ATRIBUTOS: {
            order: {TIPO:"TP_ENTERO",MAXLENGTH:2,NECESARIO:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"orden",CLASS:"border-left-0 border-right-0 bg-transparent border-top-0 rounded-0",SIMPLE:1},
            image: {TIPO:"TP_IMAGE",FOLDER:"productos",NECESARIO:1,VALID:"Archivo seleccionado",INVALID:"Archivo - 371px X 371px",BROWSER:"",VISIBILIDAD:"TP_VISIBLE",ACCEPT:"image/*",NOMBRE:"imagen",WIDTH:"371px"},
        },

        FORM: [
            {
                '<div class="col-12 col-md">/order/</div>':['order']
            },
            {
                '<div class="col-12">/image/</div>':['image'],
            },
        ],
        FUNCIONES: {
            image: {onchange:{F:"readURL(this,'/id/')",C:"id"}}
        }
    },
    sector_images: {
        ATRIBUTOS: {
            order: { TIPO: "TP_ENTERO", MAXLENGTH: 2, NECESARIO: 1, VISIBILIDAD: "TP_VISIBLE", NOMBRE: "orden", CLASS: "border-left-0 border-right-0 bg-transparent border-top-0 rounded-0", SIMPLE: 1 },
            image: { TIPO: "TP_IMAGE", FOLDER: "productos", NECESARIO: 1, VALID: "Archivo seleccionado", INVALID: "Archivo - 571px X 454px", BROWSER: "", VISIBILIDAD: "TP_VISIBLE", ACCEPT: "image/*", NOMBRE: "imagen", WIDTH: "571px" },
        },

        FORM: [
            {
                '<div class="col-12 col-md">/order/</div>': ['order']
            },
            {
                '<div class="col-12">/image/</div>': ['image'],
            },
        ],
        FUNCIONES: {
            image: { onchange: { F: "readURL(this,'/id/')", C: "id" } }
        }
    },

    /**********************************
            DESCARGAS
     ********************************** */
    descarga: {
        TABLE: "descargas",
        ATRIBUTOS: {
            image: {TIPO:"TP_IMAGE",NECESARIO:1,VALID:"Archivo seleccionado",INVALID:"Archivo - 365px X 281px",BROWSER:"",VISIBILIDAD:"TP_VISIBLE",ACCEPT:"image/*",NOMBRE:"imagen",WIDTH:"365px"},
            type: {TIPO:"TP_ENUM",ENUM:{ 0 : "Pública" , 1 : "Catálogo (Privada)" , 2 : "Listas de precios (Privada)" },VISIBILIDAD:"TP_VISIBLE",NOMBRE:"tipo",COMUN:1},
            name: {TIPO:"TP_STRING",CLASS:"border-left-0 border-top-0 rounded-0 border-right-0 bg-transparent",LABEL:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"nombre"},
            parts: {TIPO:"TP_ARRAY",COLUMN:"file",VISIBILIDAD:"TP_VISIBLE_TABLE",NOMBRE:"partes",CLASS:"text-center"}
        },
        FORM: [
            {
                '<div class="col-12 col-md-4 align-self-end">/type/</div><div class="col-12 col-md">/name/</div>':['name','type'],
            },
            {
                '<div class="col-12">/image/</div>':['image'],
            },
        ],
        FUNCIONES: {
            image: {onchange:{F:"readURL(this,'/id/')",C:"id"}},
            type: {onchange:"verificar(this)"},
        },

        NECESARIO: {
            'type' : { CREATE : 1 , UPDATE : 1 },
            'name' : { CREATE : 1 , UPDATE : 1 },
        },
    },

    descarga_parte: {
        ATRIBUTOS: {
            order: {TIPO:"TP_ENTERO",CLASS:"border-left-0 rounded-0 bg-transparent border-right-0 border-top-0",VISIBILIDAD:"TP_VISIBLE",NOMBRE:"orden",SIMPLE:1},
            file: {TIPO:"TP_FILE",FOLDER:"descargas",NECESARIO:1,VALID:"seleccionado",INVALID:"Ext: JPG, PDF, EXE, DBF, XLS y TXT",BROWSER:"Buscar",VISIBILIDAD:"TP_VISIBLE",ACCEPT:"image/jpeg,application/pdf,.exe,.dbf,.DBF,.txt,.xls,.xlsx",NOMBRE:"Archivo",SIMPLE:1},
            name: {TIPO:"TP_STRING",CLASS:"border-left-0 border-top-0 rounded-0 border-right-0 bg-transparent",LABEL:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"nombre"}
        },
        FORM: [
            {
                '<div class="col-12 col-md-4 align-self-end">/order/</div>':['order'],
            },
            {
                '<div class="col-12 col-md">/file/</div>':['file']
            },
            {
                '<div class="col-12">/name/</div>':['name'],
            },
        ],
        FUNCIONES: {
            image: {onchange:{F:"readURL(this,'/id/')",C:"id"}},
        }
    },

    /**********************************
            SERVICIOS
     ********************************** */
    servicio: {
        TABLE: "servicios",
        ATRIBUTOS: {
            order: {TIPO:"TP_STRING",LABEL:1,MAXLENGTH:3,VISIBILIDAD:"TP_VISIBLE",CLASS:"text-uppercase text-center border-left-0 border-right-0 border-top-0 rounded-0",WIDTH:"70px",NOMBRE:"orden"},
            title: {TIPO:"TP_STRING",LABEL:1,MAXLENGTH:150,VISIBILIDAD:"TP_VISIBLE",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0",NOMBRE:"título"},
            image: {TIPO:"TP_ARRAY",COLUMN:"image",VISIBILIDAD:"TP_VISIBLE_TABLE",NOMBRE:"imágenes",CLASS:"text-center"},
            resume: {TIPO:"TP_TEXT",EDITOR:1,VISIBILIDAD:"TP_VISIBLE_FORM",FIELDSET:1,NOMBRE:"resumen"},
            text: {TIPO:"TP_TEXT",EDITOR:1,VISIBILIDAD:"TP_VISIBLE_FORM",FIELDSET:1,NOMBRE:"texto"},
        },

        FORM: [
            {
                '<div class="col-12 col-md-4">/order/</div><div class="col-12 col-md">/title/</div>': ['title','order']
            },
            {
                '<div class="col-12">/resume/</div>': ['resume']
            },
            {
                '<div class="col-12">/text/</div>': ['text']
            }
        ],
        EDITOR: {
            resume: {
                toolbarGroups: [
                    { name: "basicstyles", groups: ["basicstyles"] },
                    { name: 'colors', groups: [ 'TextColor', 'BGColor' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
                ],
                removeButtons: 'CreateDiv,Language',
                colorButton_colors : colorPick,
                height: '150px'
            },
            text: {
                toolbarGroups: [
                    { name: "basicstyles", groups: ["basicstyles"] },
                    { name: 'colors', groups: [ 'TextColor', 'BGColor' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
                ],
                removeButtons: 'CreateDiv,Language',
                colorButton_colors : colorPick,
                height: '350px'
            }
        }
    },
    /**********************************
            DATOS DE LA EMPRESA
     ********************************** */
    usuarios: {
        ATRIBUTOS: {
            username: {TIPO:"TP_STRING",MAXLENGTH:30,NECESARIO:1,LABEL:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"usuario",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0"},
            name: {TIPO:"TP_STRING",MAXLENGTH:100,NECESARIO:1,LABEL:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"nombre",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0"},
            email: {TIPO:"TP_EMAIL",MAXLENGTH:150,NECESARIO:1,LABEL:1,VISIBILIDAD:"TP_VISIBLE",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0"},
            password: {TIPO:"TP_PASSWORD",VISIBILIDAD:"TP_VISIBLE_FORM",LABEL:1,NOMBRE:"contraseña",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0",HELP:"SOLO PARA EDICIÓN - para no cambiar la contraseña, deje el campo vacío"},
            level: {TIPO:"TP_ENUM",VISIBILIDAD:"TP_VISIBLE",ENUM:{1:"Administrador",0:"Usuario"},NOMBRE:"Tipo",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0 text-uppercase",COMUN:1, NECESARIO: 1},
            login: {TIPO:"TP_FECHA",VISIBILIDAD:"TP_VISIBLE_TABLE",NOMBRE:"último ingreso",FORMAT:[ "dd" , "/" , "mm" , "/" , "aaaa" , " " , "h" , ":" , "m" , ":" , "s" ],HIDDEN:1},
            ip: {TIPO:"TP_STRING",VISIBILIDAD:"TP_VISIBLE_TABLE",HIDDEN:1},
        },
        FORM: [
            {
                '/login//ip/<div class="col-12 col-md-6">/level/</div>' : ['level','login','ip']
            },
            {
                '<div class="col-12">/name/</div>' : [ 'name' ]
            },
            {
                '<div class="col-12">/email/</div>' : [ 'email' ]
            },
            {
                '<div class="col-12 col-md-6">/username/</div><div class="col-12 col-md-6">/password/</div>' : ['username','password']
            }
        ],
        NECESARIO: {
            'username' : { CREATE : 1 , UPDATE : 1 },
            'name' : { CREATE : 1 , UPDATE : 1 },
            'password' : { CREATE : 1 },
        }
    },
    fiscal: {
        ATRIBUTOS: {
            image: {TIPO:"TP_IMAGE",FOLDER:"general/fiscal",NECESARIO:1,VALID:"Archivo seleccionado",INVALID:"Seleccione archivo - 62px x 85px",BROWSER:"Buscar",VISIBILIDAD:"TP_VISIBLE",ACCEPT:"image/*",NOMBRE:"Data fiscal",WIDTH:"62px"},
            url: {TIPO:"TP_LINK",LABEL: 1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"link del sitio",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0"},
        },
        FORM: [
            {
                '<div class="col-12 col-md-5">/image/</div><div class="col-12 col-md-7">/url/</div>' : ['image','url']
            }
        ],
        FUNCIONES: {
            image: {onchange:{F:"readURL(this,'/id/')",C:"id"}}
        },
    },
    imagen: {
        ATRIBUTOS: {
            image: {TIPO:"TP_IMAGE",NECESARIO:1,VALID:"Archivo seleccionado",INVALID:"Seleccione archivo - (?)px x (?)px",BROWSER:"Buscar",VISIBILIDAD:"TP_VISIBLE",ACCEPT:"image/*",NOMBRE:"imagen",WIDTH:"150px"},
        },
        FORM: [
            {
                '<div class="col-12 col-md-8">/image/</div>' : ['image']
            }
        ],
        FUNCIONES: {
            image: {onchange:{F:"readURL(this,'/id/')",C:"id"}}
        },
    },
    terminos: {
        ATRIBUTOS: {
            title: {TIPO:"TP_STRING",LABEL: 1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"título",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0"},
            text: {TIPO:"TP_TEXT",EDITOR:1,VISIBILIDAD:"TP_VISIBLE",FIELDSET:1,NOMBRE:"texto",HELP:'Términos y condiciones de ejemplo sacado de <a href="https://terminosycondicionesdeusoejemplo.com/" target="_blank" rel="noopener noreferrer" class="text-primary">https://terminosycondicionesdeusoejemplo.com/ <i class="fas fa-external-link-alt ml-1"></i></a>'}
        },
        FORM: [
            {
                '<div class="col-12">/title/</div><div class="col-12 mt-2">/text/</div>' : ['title','text']
            }
        ],
        EDITOR: {
            text: {
                toolbarGroups: [
                    { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                    { name: 'forms', groups: [ 'forms' ] },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                    { name: 'links', groups: [ 'links' ] },
                    { name: 'insert', groups: [ 'insert' ] },
                    { name: 'styles', groups: [ 'styles' ] },
                    { name: 'colors', groups: [ 'colors' ] },
                    { name: 'tools', groups: [ 'tools' ] },
                    { name: 'others', groups: [ 'others' ] },
                    { name: 'about', groups: [ 'about' ] }
                ],
                removeButtons: 'Save,Templates,Cut,Find,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,RemoveFormat,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Font,Maximize,ShowBlocks,About,NewPage,Preview,Replace,Copy,PasteFromWord,Strike,Subscript,Superscript,Image',
                colorButton_colors : colorPick,
                height : '400px'
            },
        }
    },
    empresa_captcha: {
        ATRIBUTOS: {
            public: {TIPO:"TP_STRING",LABEL: 1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"clave pública",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0"},
            private: {TIPO:"TP_STRING",LABEL: 1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"clave secreta",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0"},
        },
        FORM: [
            {
                '<div class="col-12 col-md">/public/</div><div class="col-12 col-md">/private/</div>' : ['public','private']
            }
        ]
    },
    metadatos: {
        ATRIBUTOS: {
            seccion: {TIPO:"TP_STRING",VISIBILIDAD:"TP_VISIBLE_TABLE",CLASS:"text-uppercase",NOMBRE:"sección"},
            type: {TIPO:"TP_TEXT",VISIBILIDAD:"TP_VISIBLE_TABLE",FIELDSET:1,NOMBRE:"tipo"},
            keywords: {TIPO:"TP_TEXT",VISIBILIDAD:"TP_VISIBLE",FIELDSET:1,NOMBRE:"Palabras", CLASS:"rounded-0",HELP:"Separa elementos con coma (,)"},
            description: {TIPO:"TP_TEXT",VISIBILIDAD:"TP_VISIBLE",FIELDSET:1,NOMBRE:"descripción", CLASS:"rounded-0"}
        },
        FORM: [
            {
                '/type//seccion/<div class="col-12">/description/</div><div class="col-12 mt-2">/keywords/</div>' : ['description','keywords','seccion','type']
            }
        ]
    },
    redes: {
        ATRIBUTOS: {
            redes: {TIPO:"TP_ENUM",LABEL:1,ENUM:{facebook:'Facebook',instagram:'Instagram',twitter:'Twitter',youtube:'YouTube',linkedin:'LinkedIn',pinterest:'Pinterest'},NECESARIO:1,VISIBILIDAD:"TP_VISIBLE",CLASS:"text-uppercase border-left-0 border-right-0 border-top-0",NOMBRE:"red social",COMUN:1},
            titulo: {TIPO:"TP_STRING",LABEL: 1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"título",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0"},
            url: {TIPO:"TP_LINK",LABEL: 1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"link del sitio",CLASS:"border-left-0 border-right-0 border-top-0 rounded-0"},
        },
        FORM: [
            {
                '<div class="col-12 col-md-6 col-lg-6">/redes/</div>' : ['redes']
            },
            {
                '<div class="col-12 col-md-10 col-lg-9">/titulo/</div>' : ['titulo']
            },
            {
                '<div class="col-12 col-md-10 col-lg-9">/url/</div>': ['url']
            }
        ],
        PADRE: "empresa"
    },
    empresa_email: {
        ATRIBUTOS: {
            email: {TIPO:"TP_EMAIL",LABEL:1,MAXLENGTH:150,VISIBILIDAD:"TP_VISIBLE",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"}
        },
        FORM: [
            {
                '<div class="col-12">/email/</div>' : ['email']
            }
        ]
    },
    empresa_telefono: {
        ATRIBUTOS: {
            telefono: {TIPO:"TP_PHONE",LABEL:1,MAXLENGTH:50,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"número",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0",HELP:"Contenido oculto en el HREF. Solo números"},
            tipo: {TIPO:"TP_ENUM",ENUM:{tel:"Teléfono/Celular",wha:"Whatsapp"},NECESARIO:1,VISIBILIDAD:"TP_VISIBLE_FORM",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0 text-uppercase",NOMBRE:"Tipo",COMUN: 1},
            visible: {TIPO:"TP_STRING",LABEL:1,MAXLENGTH:50,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"elemento visible",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0",HELP:"Contenido visible. En caso de permanecer vacío, se utilizará el primer campo"},
            texto: {TIPO:"TP_STRING",LABEL:1,MAXLENGTH:50,VISIBILIDAD:"TP_VISIBLE",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0",HELP:"Texto que acompaña al elemento"},
            is_link: {TIPO:"TP_CHECK",VISIBILIDAD:"TP_VISIBLE",CHECK:"¿Es clickeable?"},
            is_header: {TIPO:"TP_CHECK",VISIBILIDAD:"TP_VISIBLE",CHECK:"¿En la cabecera?"},
            elementos: {TIPO:"TP_ENUM",ENUM:{number:"Solo número",numbertxt:"Número y texto",txtnumber:"Texto y número"},NECESARIO:1,VISIBILIDAD:"TP_VISIBLE_FORM",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0 text-uppercase",NOMBRE:"Elementos",COMUN: 1},
        },
        FORM: [
            {
                '<div class="col-12 col-md-6">/tipo/</div><div class="col-12 mt-3">/telefono/</div>' : ['tipo','telefono']
            },
            {
                '<div class="col-12">/visible/</div>':['visible']
            },
            {
                '<div class="col-12">/texto/</div>':['texto']
            },
            {
                '<div class="col-12">/elementos/</div>':['elementos']
            },
            {
                '<div class="col-12 d-flex justify-content-between">/is_link//is_header/</div>':['is_link','is_header']
            }
        ]
    },
    empresa_domicilio: {
        ATRIBUTOS: {
            calle: {TIPO:"TP_STRING",LABEL:1,VISIBILIDAD:"TP_VISIBLE",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"},
            altura: {TIPO:"TP_ENTERO",LABEL:1,VISIBILIDAD:"TP_VISIBLE",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"},
            localidad: {TIPO:"TP_STRING",LABEL:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"localidad",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"},
            provincia: {TIPO:"TP_STRING",LABEL:1,VISIBILIDAD:"TP_VISIBLE",DEFAULT:"Buenos Aires",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"},
            pais: {TIPO:"TP_STRING",LABEL:1,VISIBILIDAD:"TP_VISIBLE",DEFAULT:"Argentina",NOMBRE:"país",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"},
            cp: {TIPO:"TP_STRING",LABEL:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"código postal",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"},
            detalle: {TIPO:"TP_STRING",LABEL:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"detalles",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"},
            mapa: {TIPO:"TP_TEXT",LABEL:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"ubicación de Google Maps",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"},
            link: {TIPO:"TP_TEXT",LABEL:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"enlace de Google Maps",CLASS:"bg-transparent border-top-0 border-left-0 border-right-0 rounded-0"}
        },
        FORM: [
            {
                '<div class="col-12 col-md-8">/calle/</div><div class="col-12 col-md-4">/altura/</div>' : ['calle','altura'],
            },
            {
                '<div class="col-12 col-md-6">/cp/</div><div class="col-12 col-md-6">/pais/</div>' : ['cp','pais']
            },
            {
                '<div class="col-12 col-md-6">/provincia/</div><div class="col-12 col-md-6">/localidad/</div>' : ['provincia','localidad']
            },
            {
                '<div class="col-12 col-md">/detalle/</div>' : ['detalle']
            },
            {
                '<div class="col-12"><div class="alert alert-primary" role="alert">Copie de <a class="text-dark" href="https://www.google.com/maps" target="blank"><strong>Google Maps</strong> <i class="fas fa-external-link-alt"></i></a> la ubicación de la Empresa <i class="fas fa-share-alt"></i> / Insertar mapa / iFrame</div>/mapa/</div>' : ['mapa']
            },
            {
                '<div class="col-12"><div class="alert alert-warning" role="alert">Copie de <a class="text-dark" href="https://www.google.com/maps" target="blank"><strong>Google Maps</strong> <i class="fas fa-external-link-alt"></i></a> la ubicación de la Empresa <i class="fas fa-share-alt"></i> / Enlace para compartir</div>/link/</div>' : ['link']
            }
        ]
    },
    empresa_images: {
        ATRIBUTOS: {
            logo: {TIPO:"TP_IMAGE",NECESARIO:1,VALID:"",INVALID:"272px X 83px",BROWSER:"",VISIBILIDAD:"TP_VISIBLE",ACCEPT:"image/*",NOMBRE:"logotipo Header",WIDTH:"272px"},
            logoFooter: {TIPO:"TP_IMAGE",NECESARIO:1,VALID:"",INVALID:"272px X 83px",BROWSER:"",VISIBILIDAD:"TP_VISIBLE",ACCEPT:"image/*",NOMBRE:"logotipo footer",WIDTH:"272px"},
            favicon: {TIPO:"TP_IMAGE",NECESARIO:1,VALID:"",INVALID:"",BROWSER:"",VISIBILIDAD:"TP_VISIBLE",ACCEPT:"image/x-icon,image/png",NOMBRE:"favicon",WIDTH:"30px"},
        },
        FORM: [
            {
                '<div class="col-12 col-md-4">/logo/</div><div class="col-12 col-md-4">/logoFooter/</div><div class="col-12 col-md-4">/favicon/</div>' : ['logo','logoFooter','favicon']
            }
        ],
        FUNCIONES: {
            logo: {onchange:{F:"readURL(this,'/id/')",C:"id"}},
            logoFooter: {onchange:{F:"readURL(this,'/id/')",C:"id"}},
            favicon: {onchange:{F:"readURL(this,'/id/')",C:"id"}}
        }
    },
    empresa_text: {
        ATRIBUTOS: {
            text_contact: {TIPO:"TP_TEXT",FIELDSET:1,VISIBILIDAD:"TP_VISIBLE",NOMBRE:"Contacto"}
        },
        FORM: [
            {
                '<div class="col-12">/text_contact/</div>' : ['text_contact']
            }
        ],
        EDITOR: {
            text_contact: {
                toolbarGroups: [
                    { name: 'clipboard', groups : [ 'clipboard' , 'undo' ] },
                    { name: 'links' },
                    { name: 'colors', groups: [ 'TextColor' , 'BGColor' ] },
                ],
                removeButtons: 'Save,NewPage,Print,Preview,Templates',
                colorButton_colors : colorPick,
                height : '150px'
            },
        }
    },
};
