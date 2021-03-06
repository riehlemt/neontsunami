<?php

if ( ! function_exists('markdown'))
{
    /**
     * Convert Markdown into HTML.
     *
     * @param  string  $markdown
     * @return string
     */
    function markdown($markdown)
    {
        return \Michelf\MarkdownExtra::defaultTransform($markdown);
    }
}