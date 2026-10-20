<?php
declare(strict_types=1);

function Dump($item)
{
    $id = uniqid('dump-');

    echo '
    <style>
        @import url("https://googleapis.com");

        .php-dump {
            margin: 24px 0;
            border-radius: 12px;
            overflow: hidden;
            background: #0b0f19;
            color: #cbd5e1;
            font-family: "JetBrains Mono", "Fira Code", monospace;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.06);
            max-width: 100%;
            box-sizing: border-box;
        }

        .php-dump * {
            box-sizing: border-box;
        }

        .php-dump-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            padding: 14px 20px;
            background: #111827;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .php-dump-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-family: "Inter", sans-serif;
            font-size: 13px;
            font-weight: 500;
            color: #9ca3af;
            letter-spacing: -0.01em;
        }

        .php-dump-dots {
            display: flex;
            gap: 6px;
        }

        .php-dump-dots span {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.75;
        }

        .php-dump-badge {
            font-family: "JetBrains Mono", monospace;
            background: rgba(56, 189, 248, 0.1);
            color: #38bdf8;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 500;
            border: 1px solid rgba(56, 189, 248, 0.15);
            overflow-wrap: anywhere;
        }

        .php-dump-content {
            padding: 20px;
            margin: 0;
            overflow-x: auto;
            max-width: 100%;
            font-size: 13px;
            line-height: 1.7;
            white-space: pre;
            overflow-wrap: normal;
            tab-size: 4;
            -webkit-overflow-scrolling: touch;
            background: #0b0f19;
        }

        /* تحسين مظهر ألوان var_dump الافتراضية */
        .php-dump-content text, .php-dump-content span {
            font-family: "JetBrains Mono", monospace !important;
        }

        .php-dump-content::-webkit-scrollbar {
            height: 6px;
        }

        .php-dump-content::-webkit-scrollbar-track {
            background: #0b0f19;
        }

        .php-dump-content::-webkit-scrollbar-thumb {
            background: #1f2937;
            border-radius: 3px;
        }
        
        .php-dump-content::-webkit-scrollbar-thumb:hover {
            background: #374151;
        }

        .php-dump-footer {
            padding: 10px 20px;
            background: #0e1420;
            border-top: 1px solid rgba(255, 255, 255, 0.03);
            color: #4b5563;
            font-family: "Inter", sans-serif;
            font-size: 11px;
            font-weight: 400;
            display: flex;
            justify-content: space-between;
            gap: 8px;
            flex-wrap: wrap;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .php-dump-footer span:last-child {
            color: #ef4444;
            font-weight: 500;
            opacity: 0.85;
        }

        @media (max-width: 480px) {
            .php-dump {
                margin: 16px 0;
                border-radius: 8px;
            }

            .php-dump-content {
                padding: 16px;
                font-size: 12px;
            }

            .php-dump-header {
                padding: 12px 16px;
            }
        }
    </style>';

    echo '<div class="php-dump">';

    echo '<div class="php-dump-header">';

    echo '<div class="php-dump-title">
            <span class="php-dump-dots">
                <span style="background:#ff5f56"></span>
                <span style="background:#ffbd2e"></span>
                <span style="background:#27c93f"></span>
            </span>
            Inspector
          </div>';

    echo '<span class="php-dump-badge">'
        . htmlspecialchars(get_debug_type($item), ENT_QUOTES, 'UTF-8')
        . '</span>';

    echo '</div>';

    echo '<pre class="php-dump-content">';

    var_dump($item);

    echo '</pre>';

    echo '<div class="php-dump-footer">
            <span>PHP Environment</span>
            <span>Debug Active</span>
          </div>';

    echo '</div>';
}
