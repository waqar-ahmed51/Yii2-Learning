<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace yii\mail;

/**
 * MailerInterface is the interface that should be implemented by mailer classes.
 *
 * A mailer should mainly support creating and sending [[MessageInterface|mail messages]]. It should
 * also support composition of the message body through the view rendering mechanism. For example,
 *
 * ```php
 * Yii::$app->mailer->compose('contact/html', ['contactForm' => $form])
 *     ->setFrom('from@domain.com')
 *     ->setTo($form->email)
 *     ->setSubject($form->subject)
 *     ->send();
 * ```
 *
 * @see MessageInterface
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 2.0
 */
interface MailerInterface
{
    /**
     * Creates a new message instance and optionally composes its body content via view rendering.
     *
     * @param string|array|null $view the view to be used for rendering the message body. This can be:
     *
     * - a string, which represents the view name or [path alias](guide:concept-aliases) for rendering the HTML body of the email.
     *   In this case, the text body will be generated by applying `strip_tags()` to the HTML body.
     * - an array with 'html' and/or 'text' elements. The 'html' element refers to the view name or path alias
     *   for rendering the HTML body, while 'text' element is for rendering the text body. For example,
     *   `['html' => 'contact-html', 'text' => 'contact-text']`.
     * - null, meaning the message instance will be returned without body content.
     *
     * @param array $params the parameters (name-value pairs) that will be extracted and made available in the view file.
     * @return MessageInterface message instance.
     */
    public function compose($view = null, array $params = []);

    /**
     * Sends the given email message.
     * @param MessageInterface $message email message instance to be sent
     * @return bool whether the message has been sent successfully
     */
    public function send($message);

    /**
     * Sends multiple messages at once.
     *
     * This method may be implemented by some mailers which support more efficient way of sending multiple messages in the same batch.
     *
     * @param array $messages list of email messages, which should be sent.
     * @return int number of messages that are successfully sent.
     */
    public function sendMultiple(array $messages);
}
