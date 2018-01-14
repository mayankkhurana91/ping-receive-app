
plugin.tx_pingreceive_information {
    view {
        templateRootPaths.0 = EXT:ping_receive/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_pingreceive_information.view.templateRootPath}
        partialRootPaths.0 = EXT:ping_receive/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_pingreceive_information.view.partialRootPath}
        layoutRootPaths.0 = EXT:ping_receive/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_pingreceive_information.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_pingreceive_information.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_pingreceive_management {
    view {
        templateRootPaths.0 = EXT:ping_receive/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_pingreceive_management.view.templateRootPath}
        partialRootPaths.0 = EXT:ping_receive/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_pingreceive_management.view.partialRootPath}
        layoutRootPaths.0 = EXT:ping_receive/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_pingreceive_management.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_pingreceive_management.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_pingreceive_administration {
    view {
        templateRootPaths.0 = EXT:ping_receive/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_pingreceive_administration.view.templateRootPath}
        partialRootPaths.0 = EXT:ping_receive/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_pingreceive_administration.view.partialRootPath}
        layoutRootPaths.0 = EXT:ping_receive/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_pingreceive_administration.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_pingreceive_administration.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_pingreceive._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-ping-receive table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-ping-receive table th {
        font-weight:bold;
    }

    .tx-ping-receive table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
