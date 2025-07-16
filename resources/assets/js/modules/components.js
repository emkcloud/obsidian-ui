// Alpine.js component to copy plain text from a code block.
// Shows a temporary confirmation icon on successful copy.

Alpine.data('obsidianui_code',()=>(
{
    copied: false,

    getCode()
    {
        return this.$refs.code;
    },

    getCodeText()
    {
        return this.getCode().innerText;
    },

    copy()
    {
        navigator.clipboard.writeText(this.getCodeText()).then(() =>
        {
            this.copied = true; setTimeout(() => this.copied = false, 1000);

        }).catch(() => console.log("Copy failed"));
    }
}));