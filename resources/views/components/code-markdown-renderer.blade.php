{!!app(Spatie\LaravelMarkdown\MarkdownRenderer::class)
->highlightTheme($theme)
->toHtml("```".$language."\n".$slot."\n```");!!}
