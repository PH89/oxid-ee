[{*
* Shop System Plugins:
* - Terms of Use can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
* - License can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/LICENSE
*
*}]

[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

<script type="text/javascript">
<!--
function wdCopyToClipboard(text)
{
    var textarea = document.createElement('textarea');
    var success = false;

    // old versions of IE
    if (window.clipboardData) {
        success = window.clipboardData.setData('Text', decodeURIComponent(text));
    // other browsers
    } else {
        textarea.textContent = decodeURIComponent(text);
        textarea.style.position = 'fixed';

        document.body.appendChild(textarea);
        textarea.select();

        try {
            success = document.execCommand('copy');
        } catch (e) {
            success = false;
        }

        document.body.removeChild(textarea);
    }

    return success;
}
//-->
</script>

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$controller}]">
</form>

[{if $data}]
    <table cellspacing="0" cellpadding="0" border="0" width="600">
        [{foreach from=$data item=row}]
            <tr height="20">
                <td width="25%">[{$row.title}]</td>
                <td>
                    [{if $row.action === 'copyToClipboard'}]
                    <button type="button" onclick="wdCopyToClipboard('[{$row.value|escape:'url'}]');">[{$row.action_title}]</button>
                    [{else}]
                    <strong>[{$row.value}]</strong>
                    [{/if}]
                </td>
            </tr>
        [{/foreach}]
    </table>
[{elseif $emptyText}]
    <em>[{$emptyText}]</em>
[{/if}]

[{if $oView->shouldDisplayLiveChat()}]
  [{include file="live_chat.tpl"}]
[{/if}]

[{include file="bottomnaviitem.tpl"}]

[{include file="bottomitem.tpl"}]
