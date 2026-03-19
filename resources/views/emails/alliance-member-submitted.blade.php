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
                <div style="font-size: 26px; line-height: 1.25; font-weight: 700; color: #111827; margin-bottom: 6px;">
                    {{ $allianceMember->full_name }}
                </div>
                <div style="font-size: 15px; line-height: 1.8; color: #475467;">
                    <strong style="color: #111827;">Role:</strong> {{ $allianceMember->role }}
                    <span style="display: inline-block; margin: 0 10px; color: #d0d5dd;">|</span>
                    <strong style="color: #111827;">Country:</strong> {{ $allianceMember->country }}
                </div>
                <div style="font-size: 15px; line-height: 1.8; color: #475467;">
                    <strong style="color: #111827;">Email:</strong> <a href="mailto:{{ $allianceMember->email }}" style="color: #0f4c81; text-decoration: none;">{{ $allianceMember->email }}</a>
                    <span style="display: inline-block; margin: 0 10px; color: #d0d5dd;">|</span>
                    <strong style="color: #111827;">Phone:</strong> <a href="tel:{{ $allianceMember->phone }}" style="color: #0f4c81; text-decoration: none;">{{ $allianceMember->phone }}</a>
                </div>
                <div style="margin-top: 18px; padding-top: 18px; border-top: 1px solid #e5e7eb; font-size: 14px; line-height: 1.8; color: #475467;">
                    <strong style="color: #111827;">Source:</strong> {{ $sourceSummary ?: 'Direct contact form' }}<br>
                    <strong style="color: #111827;">Program:</strong> {{ $allianceMember->source_program_title ?: 'Not specified' }}<br>
                    <strong style="color: #111827;">Submitted:</strong> {{ $submittedAt ?: 'Not available' }}
                </div>
            </td>
        </tr>

        <tr>
            <td style="padding: 8px 32px 24px;">
                <div style="font-size: 14px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: #8b7b4b; margin-bottom: 10px;">
                    Message
                </div>
                <div style="font-size: 16px; line-height: 1.8; color: #1f2937; padding: 0 0 18px; border-bottom: 1px solid #e5e7eb;">
                    {{ $allianceMember->message ?: 'No message provided.' }}
                </div>
            </td>
        </tr>

        <tr>
            <td style="padding: 0 32px 30px;">
                <div style="font-size: 14px; font-weight: 700; color: #111827; margin-bottom: 12px;">Tracking details</div>
                <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="border-collapse: collapse;">
                    <tr>
                        <td style="padding: 12px 0; width: 170px; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Source page</td>
                        <td style="padding: 12px 0; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb;">{{ $allianceMember->source_page ?: 'Not provided' }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 0; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Source section</td>
                        <td style="padding: 12px 0; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb;">{{ $allianceMember->source_section ?: 'Not provided' }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 0; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Source button</td>
                        <td style="padding: 12px 0; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb;">{{ $allianceMember->source_button ?: 'Not provided' }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 0; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Program slug</td>
                        <td style="padding: 12px 0; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb;">{{ $allianceMember->source_program_slug ?: 'Not provided' }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 0; font-size: 13px; font-weight: 700; color: #344054; border-bottom: 1px solid #e5e7eb;">Source URL</td>
                        <td style="padding: 12px 0; font-size: 14px; color: #101828; border-bottom: 1px solid #e5e7eb; word-break: break-word;">
                            @if ($allianceMember->source_url)
                                <a href="{{ $allianceMember->source_url }}" style="color: #0f4c81; text-decoration: none;">{{ $allianceMember->source_url }}</a>
                            @else
                                Not provided
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 0; font-size: 13px; font-weight: 700; color: #344054;">Referrer URL</td>
                        <td style="padding: 12px 0; font-size: 14px; color: #101828; word-break: break-word;">
                            @if ($allianceMember->referrer_url)
                                <a href="{{ $allianceMember->referrer_url }}" style="color: #0f4c81; text-decoration: none;">{{ $allianceMember->referrer_url }}</a>
                            @else
                                Not provided
                            @endif
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
