<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Alliance Submission</title>
</head>
<body style="margin: 0; padding: 32px 16px; background-color: #f4f1e8; font-family: Arial, sans-serif; color: #111827;">
    @php
        $submittedAt = optional($allianceMember->created_at)->format('M d, Y \a\t H:i');
        $sourceSummary = collect([
            $allianceMember->source_page,
            $allianceMember->source_section,
            $allianceMember->source_button,
        ])->filter()->implode(' / ');
    @endphp

    <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width: 760px; margin: 0 auto; background: #ffffff; border-radius: 22px; overflow: hidden; box-shadow: 0 18px 40px rgba(15, 23, 42, 0.10);">
        <tr>
            <td style="padding: 28px 32px; background: linear-gradient(135deg, #0f172a, #1f2937);">
                <div style="font-size: 12px; letter-spacing: 0.18em; text-transform: uppercase; color: #cbd5e1; margin-bottom: 12px;">
                    Dental Alliance for East Africa
                </div>
                <div style="font-size: 30px; line-height: 1.2; font-weight: 700; color: #f8fafc; margin-bottom: 10px;">
                    New Lead Submission
                </div>
                <div style="font-size: 16px; line-height: 1.6; color: #e2e8f0;">
                    A new inquiry has been captured from the website contact flow.
                </div>
            </td>
        </tr>

        <tr>
            <td style="padding: 28px 32px 8px;">
                <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td valign="top" style="padding: 0 12px 16px 0;">
                            <div style="border: 1px solid #eadfbc; border-radius: 18px; padding: 18px 20px; background: #fcfaf4;">
                                <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.12em; color: #8b7b4b; margin-bottom: 8px;">Lead</div>
                                <div style="font-size: 24px; line-height: 1.25; font-weight: 700; color: #111827;">{{ $allianceMember->full_name }}</div>
                                <div style="font-size: 15px; line-height: 1.7; color: #475467; margin-top: 8px;">
                                    <div><strong style="color: #111827;">Role:</strong> {{ $allianceMember->role }}</div>
                                    <div><strong style="color: #111827;">Country:</strong> {{ $allianceMember->country }}</div>
                                </div>
                            </div>
                        </td>
                        <td valign="top" style="padding: 0 0 16px 12px;">
                            <div style="border: 1px solid #e5e7eb; border-radius: 18px; padding: 18px 20px; background: #f8fafc;">
                                <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.12em; color: #667085; margin-bottom: 8px;">Source</div>
                                <div style="font-size: 17px; line-height: 1.5; font-weight: 700; color: #111827;">{{ $sourceSummary ?: 'Direct contact form' }}</div>
                                <div style="font-size: 14px; line-height: 1.6; color: #475467; margin-top: 6px;">Submitted {{ $submittedAt ?: 'just now' }}</div>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td style="padding: 0 32px 20px;">
                <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse: separate; border-spacing: 0;">
                    <tr>
                        <td style="padding: 14px 16px; background: #f8fafc; border: 1px solid #e5e7eb; border-right: none; border-radius: 14px 0 0 14px;">
                            <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.12em; color: #667085; margin-bottom: 6px;">Email</div>
                            <div style="font-size: 15px; line-height: 1.5; color: #111827;"><a href="mailto:{{ $allianceMember->email }}" style="color: #0f4c81; text-decoration: none;">{{ $allianceMember->email }}</a></div>
                        </td>
                        <td style="padding: 14px 16px; background: #f8fafc; border: 1px solid #e5e7eb; border-right: none;">
                            <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.12em; color: #667085; margin-bottom: 6px;">Phone</div>
                            <div style="font-size: 15px; line-height: 1.5; color: #111827;"><a href="tel:{{ $allianceMember->phone }}" style="color: #0f4c81; text-decoration: none;">{{ $allianceMember->phone }}</a></div>
                        </td>
                        <td style="padding: 14px 16px; background: #f8fafc; border: 1px solid #e5e7eb; border-radius: 0 14px 14px 0;">
                            <div style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.12em; color: #667085; margin-bottom: 6px;">Program</div>
                            <div style="font-size: 15px; line-height: 1.5; color: #111827;">{{ $allianceMember->source_program_title ?: 'Not specified' }}</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td style="padding: 0 32px 24px;">
                <div style="border: 1px solid #e5e7eb; border-radius: 18px; overflow: hidden;">
                    <div style="padding: 14px 18px; background: #111827; color: #f9fafb; font-size: 14px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase;">
                        Message
                    </div>
                    <div style="padding: 18px; background: #ffffff; font-size: 16px; line-height: 1.7; color: #1f2937;">
                        {{ $allianceMember->message ?: 'No message provided.' }}
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td style="padding: 0 32px 28px;">
                <div style="font-size: 14px; font-weight: 700; color: #111827; margin-bottom: 12px;">Tracking details</div>
                <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse: collapse; border: 1px solid #e5e7eb; border-radius: 16px; overflow: hidden;">
                    <tr style="background: #fcfcfd;">
                        <td style="padding: 12px 16px; width: 180px; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Source page</td>
                        <td style="padding: 12px 16px; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb;">{{ $allianceMember->source_page ?: 'Not provided' }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 16px; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Source section</td>
                        <td style="padding: 12px 16px; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb;">{{ $allianceMember->source_section ?: 'Not provided' }}</td>
                    </tr>
                    <tr style="background: #fcfcfd;">
                        <td style="padding: 12px 16px; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Source button</td>
                        <td style="padding: 12px 16px; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb;">{{ $allianceMember->source_button ?: 'Not provided' }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 16px; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Program slug</td>
                        <td style="padding: 12px 16px; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb;">{{ $allianceMember->source_program_slug ?: 'Not provided' }}</td>
                    </tr>
                    <tr style="background: #fcfcfd;">
                        <td style="padding: 12px 16px; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Source URL</td>
                        <td style="padding: 12px 16px; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb; word-break: break-word;">
                            @if ($allianceMember->source_url)
                                <a href="{{ $allianceMember->source_url }}" style="color: #0f4c81; text-decoration: none;">{{ $allianceMember->source_url }}</a>
                            @else
                                Not provided
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 16px; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Referrer URL</td>
                        <td style="padding: 12px 16px; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb; word-break: break-word;">
                            @if ($allianceMember->referrer_url)
                                <a href="{{ $allianceMember->referrer_url }}" style="color: #0f4c81; text-decoration: none;">{{ $allianceMember->referrer_url }}</a>
                            @else
                                Not provided
                            @endif
                        </td>
                    </tr>
                    <tr style="background: #fcfcfd;">
                        <td style="padding: 12px 16px; font-size: 13px; font-weight: 700; color: #344054;">Submitted at</td>
                        <td style="padding: 12px 16px; font-size: 14px; color: #101828;">{{ $submittedAt ?: 'Not available' }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
