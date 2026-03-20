import './bootstrap';
import '@mantine/core/styles.css';
import '@blocknote/mantine/style.css';
import '@blocknote/core/fonts/inter.css';

import React, { useEffect, useRef } from 'react';
import { createRoot } from 'react-dom/client';
import { MantineProvider } from '@mantine/core';
import { useCreateBlockNote } from '@blocknote/react';
import { BlockNoteView } from '@blocknote/mantine';

function normalizeHtml(html) {
    const trimmed = (html || '').trim();

    if (trimmed === '<p></p>' || trimmed === '<p><br></p>') {
        return '';
    }

    return trimmed;
}

function BlockNoteField({ mountNode }) {
    const inputId = mountNode.dataset.inputId;
    const input = document.getElementById(inputId);
    const initialHtml = mountNode.dataset.initialHtml
        ? window.atob(mountNode.dataset.initialHtml)
        : '';
    const hydratedRef = useRef(false);

    const editor = useCreateBlockNote();

    useEffect(() => {
        if (!input) {
            return;
        }

        if (!hydratedRef.current) {
            hydratedRef.current = true;

            if (initialHtml) {
                const blocks = editor.tryParseHTMLToBlocks(initialHtml);

                if (blocks.length > 0) {
                    editor.replaceBlocks(editor.document, blocks);
                }
            }
        }

        input.value = normalizeHtml(editor.blocksToHTMLLossy(editor.document));
    }, [editor, initialHtml, input]);

    return (
        <MantineProvider>
            <BlockNoteView
                editor={editor}
                theme="light"
                onChange={() => {
                    if (!input) {
                        return;
                    }

                    input.value = normalizeHtml(editor.blocksToHTMLLossy(editor.document));
                }}
            />
        </MantineProvider>
    );
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-blocknote-editor]').forEach((mountNode) => {
        const root = createRoot(mountNode);
        root.render(<BlockNoteField mountNode={mountNode} />);
    });
});
