<?php

namespace QuantaQuirk\Support\Facades;

use QuantaQuirk\Support\Testing\Fakes\MailFake;

/**
 * @method static \QuantaQuirk\Contracts\Mail\Mailer mailer(string|null $name = null)
 * @method static \QuantaQuirk\Mail\Mailer driver(string|null $driver = null)
 * @method static \Symfony\Component\Mailer\Transport\TransportInterface createSymfonyTransport(array $config)
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver(string $name)
 * @method static void purge(string|null $name = null)
 * @method static \QuantaQuirk\Mail\MailManager extend(string $driver, \Closure $callback)
 * @method static \QuantaQuirk\Contracts\Foundation\Application getApplication()
 * @method static \QuantaQuirk\Mail\MailManager setApplication(\QuantaQuirk\Contracts\Foundation\Application $app)
 * @method static \QuantaQuirk\Mail\MailManager forgetMailers()
 * @method static void alwaysFrom(string $address, string|null $name = null)
 * @method static void alwaysReplyTo(string $address, string|null $name = null)
 * @method static void alwaysReturnPath(string $address)
 * @method static void alwaysTo(string $address, string|null $name = null)
 * @method static \QuantaQuirk\Mail\PendingMail to(mixed $users, string|null $name = null)
 * @method static \QuantaQuirk\Mail\PendingMail cc(mixed $users, string|null $name = null)
 * @method static \QuantaQuirk\Mail\PendingMail bcc(mixed $users, string|null $name = null)
 * @method static \QuantaQuirk\Mail\SentMessage|null html(string $html, mixed $callback)
 * @method static \QuantaQuirk\Mail\SentMessage|null raw(string $text, mixed $callback)
 * @method static \QuantaQuirk\Mail\SentMessage|null plain(string $view, array $data, mixed $callback)
 * @method static string render(string|array $view, array $data = [])
 * @method static \QuantaQuirk\Mail\SentMessage|null send(\QuantaQuirk\Contracts\Mail\Mailable|string|array $view, array $data = [], \Closure|string|null $callback = null)
 * @method static mixed queue(\QuantaQuirk\Contracts\Mail\Mailable|string|array $view, string|null $queue = null)
 * @method static mixed onQueue(string $queue, \QuantaQuirk\Contracts\Mail\Mailable $view)
 * @method static mixed queueOn(string $queue, \QuantaQuirk\Contracts\Mail\Mailable $view)
 * @method static mixed later(\DateTimeInterface|\DateInterval|int $delay, \QuantaQuirk\Contracts\Mail\Mailable $view, string|null $queue = null)
 * @method static mixed laterOn(string $queue, \DateTimeInterface|\DateInterval|int $delay, \QuantaQuirk\Contracts\Mail\Mailable $view)
 * @method static \Symfony\Component\Mailer\Transport\TransportInterface getSymfonyTransport()
 * @method static \QuantaQuirk\Contracts\View\Factory getViewFactory()
 * @method static void setSymfonyTransport(\Symfony\Component\Mailer\Transport\TransportInterface $transport)
 * @method static \QuantaQuirk\Mail\Mailer setQueue(\QuantaQuirk\Contracts\Queue\Factory $queue)
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static void assertSent(string|\Closure $mailable, callable|int|null $callback = null)
 * @method static void assertNotOutgoing(string|\Closure $mailable, callable|null $callback = null)
 * @method static void assertNotSent(string|\Closure $mailable, callable|null $callback = null)
 * @method static void assertNothingOutgoing()
 * @method static void assertNothingSent()
 * @method static void assertQueued(string|\Closure $mailable, callable|int|null $callback = null)
 * @method static void assertNotQueued(string|\Closure $mailable, callable|null $callback = null)
 * @method static void assertNothingQueued()
 * @method static void assertSentCount(int $count)
 * @method static void assertQueuedCount(int $count)
 * @method static void assertOutgoingCount(int $count)
 * @method static \QuantaQuirk\Support\Collection sent(string|\Closure $mailable, callable|null $callback = null)
 * @method static bool hasSent(string $mailable)
 * @method static \QuantaQuirk\Support\Collection queued(string|\Closure $mailable, callable|null $callback = null)
 * @method static bool hasQueued(string $mailable)
 *
 * @see \QuantaQuirk\Mail\MailManager
 * @see \QuantaQuirk\Support\Testing\Fakes\MailFake
 */
class Mail extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return \QuantaQuirk\Support\Testing\Fakes\MailFake
     */
    public static function fake()
    {
        $actualMailManager = static::isFake()
                ? static::getFacadeRoot()->manager
                : static::getFacadeRoot();

        return tap(new MailFake($actualMailManager), function ($fake) {
            static::swap($fake);
        });
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mail.manager';
    }
}
