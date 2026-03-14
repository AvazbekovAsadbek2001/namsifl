INSERT INTO positions (title, description, created_at, updated_at)
VALUES (
    '{"uz": "Bo‘lim boshlig‘i", "ru": "Руководитель отдела", "en": "Head of Department"}'::jsonb,
    NULL,
    NOW(),
    NOW()
);
